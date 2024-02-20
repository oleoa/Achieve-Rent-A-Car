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
        // Get the current route name
        $currentRouteName = $request->route()->getName();

        // Get the domain 'achieverentacar.com' or 'dashboard.achieverentacar.com'
        $domain = $request->getHost();

        // Check if the route is in the /dashboard (only for local environment)
        $isLocalDashboard = explode('/', $request->path())[0] == 'dashboard';
        
        // The routes that are allowed to be accessed only without authentication
        $allowedNotAuthRoutes = [
            "dashboard.sign.in",
            "dashboard.sign.ing-in",
            "dashboard.user.setup",
            "dashboard.user.settingup"
        ];

        // For the dashboard, the user can be logged in or not
        if($domain == 'dashboard.achieverentacar.com' || $isLocalDashboard)
        {
            //If the user is logged in
            if(Auth::check())
            {
                // It should not be in any of the allowedNotAuthRoutes
                if(in_array($currentRouteName, $allowedNotAuthRoutes))
                {
                    return redirect()->route('dashboard.views.list');
                }

            }
            // If it's not logged in
            else
            {
                // It should be in the allowedNotAuthRoutes
                if(!in_array($currentRouteName, $allowedNotAuthRoutes))
                {
                    return redirect()->route('dashboard.sign.in');
                }
            }
        }

        // If the user is logged in, then it should be good to go
        return $next($request);
    }
}
