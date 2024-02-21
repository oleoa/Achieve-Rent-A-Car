<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\UpdateEmail;

class Profile extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $this->data('id', $user->id);
        $this->data('name', $user->name);
        $this->data('email', $user->email);
        $this->data('image', $user->image);
        return $this->load('dashboard.profile', 'profile');
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(auth()->user()->id),
            ],
            'password' => 'required',
        ]);

        // Get the old user to check the password and email
        $user = User::find($request->id);
        if(!$user) return redirect()->route('dashboard.profile.editor')->with('error', 'User not found');

        // Check the password
        if(!Hash::check($request->password, $user->password)) return redirect()->route('dashboard.profile.editor')->with('error', 'Invalid password');

        // Updates the name
        $user->name = $request->name;

        // Updates the email if it changed
        if($user->email != $request->email){

            // Create a token code
            $verificationToken = Str::random(40);
            $user->verification_token = $verificationToken;

            // Send the email with the token code
            $verificationLink = route('dashboard.profile.email', ['token' => $verificationToken]);
            Mail::to($request->email)->send(new UpdateEmail($verificationLink));

            // Saves the new email in a temporary field
            $user->verification_email = $request->email;

            // Alert the user to validate his email
            session()->flash("info", 'Validate your email to update it. We have sent you an email with the instructions.');
        }

        $user->update();

        return redirect()->route('dashboard.profile.editor');
    }

    public function email(Request $request)
    {
        $user = User::where('verification_token', $request->token)->first();
        if(!$user) return redirect()->route('dashboard.profile.editor')->with('error', 'Invalid token');
        if(!$user->verification_email) return redirect()->route('dashboard.profile.editor')->with('error', 'Invalid token');

        $user->email = $user->verification_email;
        $user->verification_email = null;
        $user->verification_token = null;
        $user->update();

        return redirect()->route('dashboard.profile.editor')->with('success', 'Email updated successfully');
    }
}
