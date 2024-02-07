<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Zoo;

class MyAuthenticate
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $currentRouteName = $request->route()->getName();
    dd($request->getHost());
    $allowedNotAuthRoutes = [
      "root",
      "home",
      "about",
      "faq",
      "contact",
      "contact-send",
      "terms",
      "privacy",

      "sign.in",
      "sign.out",
      "sign.ing-in",
      "user.setup",
      "user.settingup"
    ];

    if(in_array($currentRouteName, $allowedNotAuthRoutes))      
      return $next($request);

    if(Auth::guest())
      return redirect()->route('sign.in');

    return $next($request);
  }
}
