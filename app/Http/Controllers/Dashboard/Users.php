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
        // Get all the existing users
        $existing = UserModel::all()->toArray();
        $this->data('users', $existing);
        $this->current('users');
        return $this->load('dashboard.users');
    }
  
    public function delete(Request $request)
    {
        // Get the id from the request and delete it
        $id = $request->id;
        $faq = UserModel::find($id);
        $faq->delete();

        // Save the new data to the file
        $this->saver->users();

        // Redirect the user to the user list
        return redirect()->route('user.list');
    }
  
    public function add(Request $request)
    {
        // Checks if the user is admin
        $isChecked = $request->input('admin', false);
        $isChecked = $isChecked == 'on' ? true : false;
    
        // Validate the email
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
    
        // Create a token code
        $verificationToken = Str::random(40);
        
        // Create a new user
        $new_user = array(
            'email' => $validated['email'],
            'admin' => $isChecked,
            'verification_token' => $verificationToken,
            'api_token' => Str::random(60),
        );
        $info = UserModel::create($new_user);
        
        // If the user was not created
        if(!$info) {
            session()->flash("error", 'Server error. Please try again later.');
            return redirect()->route('user.list');
        }
        
        // Send the email with the token code
        $verificationLink = route('user.setup', ['token' => $verificationToken]);
        Mail::to($request->email)->send(new SetupEmail($verificationLink));
        
        // Save the new data to the file
        $this->saver->users();

        // Redirect the user to the user list
        session()->flash("success", 'User added successfully.');    
        return redirect()->route('user.list');
    }
    
    public function setup(Request $request)
    {
        // Get the token from the request
        $token = $request->token;

        // Search for the user with the token
        $user = UserModel::where('verification_token', $token)->first();
    
        // If the user does not exist abort
        if(!$user) {
            session()->flash("error", 'Invalid token.');
            return redirect()->route('sign.in');
        }
    
        // If the user is already setted up abort
        if($user->setted_up) {
            session()->flash("error", 'User already setted up.');
            return redirect()->route('sign.in');
        }

        // Load the view with the data
        $this->data('token', $token);
        $this->data('email', $user->email);
        $this->data('id', $user->id);
        $this->current('users');
        return $this->load('dashboard.setup');
    }
  
    public function settingup(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'password' => [
                'required',
                'confirmed'
            ]
        ]);
        
        // Get the token from the request
        $token = $request->token;

        // Search for the user with the token
        $user = UserModel::where('verification_token', $token)->first();
    
        // If the token is invalid abort
        if(!$user) {
            session()->flash("error", 'Invalid token.');
            return redirect()->route('sign.in');
        }

        // If the user is already setted up abort
        if($user->setted_up) {
            session()->flash("error", 'User already setted up.');
            return redirect()->route('sign.in');
        }
    
        // If the user does not exist abort
        $id = $request->id;
        $user = UserModel::where('id', $id)->first();    
        if(!$user) {
            session()->flash("error", 'User does not exist.');
            return redirect()->route('sign.in');
        }
    
        // Set the user up
        $pass_hash = Hash::make($validated['password']);        
        $user->name = $validated['name'];
        $user->setted_up = true;
        $user->password = $pass_hash;
        $user->save();
        
        // Save the new data to the file
        $this->saver->users();
    
        // Log the user in
        if(!Auth::attempt($validated)){
            session()->flash('error', 'The provided credentials do not match our records.');
            return redirect()->route('sign.in');
        }
        
        // Regenerate the session
        $request->session()->regenerate();

        // Redirect the user to the dashboard
        session()->flash("success", 'User setted successfully.');
        return redirect()->route('views');
    }
}
