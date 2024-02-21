<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function signin()
    {
        // Load the view
        return $this->load('dashboard.signin', 'signin');
    }

    public function signing_in(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to sign in
        if(!Auth::attempt($validated)) {
            session()->flash('error', 'The provided credentials do not match our records.');
            return redirect()->route('dashboard.sign.in');
        }
        
        // Redirect the user to the dashboard logged
        $request->session()->regenerate();
        return redirect()->route('dashboard.views.list');
    }

    public function signout()
    {
        // Sign out the user
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        // Redirect the user to the sign in page
        return redirect()->route('dashboard.sign.in');
    }
}
