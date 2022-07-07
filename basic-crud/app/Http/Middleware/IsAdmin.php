<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param string $userType
     * 
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = auth()->user()->role;

        $isManager = ($role === "manager");
        $isAdmin = ($role === "admin");

        if($isManager || $isAdmin){
            return $next($request);
        }

        return redirect()
            ->route('home')
            ->with('error', "Only admins have access to this page.");
    }
}
