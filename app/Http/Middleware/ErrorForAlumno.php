<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ErrorForAlumno
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_roles = Auth::user()->roles->pluck('id')->toArray();

        if (in_array(4, $user_roles)) {
            abort(404);
        } 

        return $next($request);
    }
}
