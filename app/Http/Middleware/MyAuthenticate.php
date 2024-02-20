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
    $isDashboard = explode('/', $request->path())[0] == 'dashboard';
    
    // If the domain in not dashboard or not localhost, then it's the main site and it should not be authenticated
    if($domain != 'dashboard.achieverentacar.com' && !$isDashboard)
        return $next($request);

    // If the route is in the allowedNotAuthRoutes, then it should not be authenticated
    if(in_array($currentRouteName, $allowedNotAuthRoutes))
        return $next($request);

    // If the user is not logged in, then it should be redirected to the sign in page
    if(Auth::guest())
        return redirect()->route('sign.in');

    // If the user is logged in, then it should be good to go
    return $next($request);
  }
}
