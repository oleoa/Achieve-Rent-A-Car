<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $currentRouteName = $request->route()->getName();
    $notAllowedRoutes = [
      "user.list",
      "user.add",
      "user.delete"
    ];
    
    $isAdmin = auth()->user()['admin']??false;
    if(!$isAdmin && in_array($currentRouteName, $notAllowedRoutes))
      return redirect()->route('views');

    return $next($request);
  }
}
