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
    
    $allowedNotAuthRoutes = [
      "sign.in",
      "sign.out",
      "sign.ing-in",
      "user.setup",
      "user.settingup"
    ];

    $domain = $request->getHost();
    if($domain != 'dashboard.achieverentacar.com')
        return $next($request);

    if(in_array($currentRouteName, $allowedNotAuthRoutes))      
      return $next($request);

    if(Auth::guest())
      return redirect()->route('sign.in');

    return $next($request);
  }
}
