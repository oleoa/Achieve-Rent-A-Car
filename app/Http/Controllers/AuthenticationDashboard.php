<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationDashboard extends Controller
{
    public function signin()
    {
        $this->current('signin');
        return $this->load('dashboard.signin');
    }

  public function signing_in(Request $request)
  {
    $validated = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if(!Auth::attempt($validated)) {
      session()->flash('error', 'The provided credentials do not match our records.');
      return redirect()->route('sign.in');
    }
    
    $request->session()->regenerate();
    return redirect()->route('views');
  }

  public function signout()
  {
    auth()->logout();

    session()->invalidate();

    session()->regenerateToken();

    return redirect()->route('views');
  }
}
