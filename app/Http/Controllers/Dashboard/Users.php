<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Http\Request;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SetupEmail;

class Users extends Controller
{
    public function index()
    {
      $existing = UserModel::all()->toArray();
      $this->data('users', $existing);
      $this->current('users');
      return $this->load('dashboard.users');
    }
  
    public function delete(Request $request)
    {
      $id = $request->id;
      $faq = UserModel::find($id);
      $faq->delete();
      return redirect()->route('user.list');
    }
  
    public function add(Request $request)
    {
      $isChecked = $request->input('admin', false);
      $isChecked = $isChecked == 'on' ? true : false;
  
      $validated = $request->validate([
        'email' => 'required|email|unique:users,email'
      ]);
  
      $verificationToken = Str::random(40);
      
      $new_user = array(
        'email' => $validated['email'],
        'admin' => $isChecked,
        'verification_token' => $verificationToken,
        'api_token' => Str::random(60),
      );
      
      $info = UserModel::create($new_user);
      
      if(!$info) {
        session()->flash("error", 'Server error. Please try again later.');
        return redirect()->route('user.list');
      }
      
      $verificationLink = route('user.setup', ['token' => $verificationToken]);
      Mail::to($request->email)->send(new SetupEmail($verificationLink));
      
      session()->flash("success", 'User added successfully.');
  
      return redirect()->route('user.list');
    }
    
    public function setup(Request $request)
    {
      $token = $request->token;
      $user = UserModel::where('verification_token', $token)->first();
  
      if(!$user) {
        session()->flash("error", 'Invalid token.');
        return redirect()->route('sign.in');
      }
  
      $this->data('token', $token);
      $this->data('email', $user->email);
      $this->data('id', $user->id);
      $this->current('users');
      return $this->load('dashboard.setup');
    }
  
    public function settingup(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required',
        'password' => [
          'required',
          'confirmed'
        ]
      ]);
      
      $token = $request->token;
      $user = UserModel::where('verification_token', $token)->first();
  
      if(!$user) {
        session()->flash("error", 'Invalid token.');
        return redirect()->route('sign.in');
      }
  
      $id = $request->id;
      $user = UserModel::where('id', $id)->first();
  
      if(!$user) {
        session()->flash("error", 'User does not exist.');
        return redirect()->route('sign.in');
      }
  
      $pass_hash = Hash::make($validated['password']);
      
      $user->name = $validated['name'];
      $user->setted_up = true;
      $user->password = $pass_hash;
      $user->save();
  
      if(!Auth::attempt($validated)){
        session()->flash('error', 'The provided credentials do not match our records.');
        return redirect()->route('sign.in');
      }
      
      $request->session()->regenerate();
      session()->flash("success", 'User setted successfully.');
      return redirect()->route('views');
    }
}
