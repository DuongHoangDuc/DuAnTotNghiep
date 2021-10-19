<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthencationAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(session()->all());
        if(!(auth()->user())) {
            return redirect()->route('admin.getLogin');
        } else {
            return $next($request);
        }
        
        
    }
}
