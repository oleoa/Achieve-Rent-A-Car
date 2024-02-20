<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManagerData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isManaging = $request->getHost() == 'managing.achieverentacar.com' || $request->getHost() == '192.168.0.174';
        $request->merge(['isManaging' => $isManaging]);
        
        return $next($request);
    }
}
