<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class countryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $array=["india","bangladesh","nepal","canada"];
        if(in_array($request->country,$array)){
            return $next($request);
        } 

        return redirect()->to('/');
    }
}