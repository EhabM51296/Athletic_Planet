<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;


class setLanguage
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
        if($request->has('lang')) {
            app()->setLocale($request->lang);
        }
        else
            app()->setLocale('en');

        return $next($request);
    }
}