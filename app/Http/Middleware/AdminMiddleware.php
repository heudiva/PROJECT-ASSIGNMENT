<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
        // dd( url()->current());
        // dd($request->route()->getName());
    {
        if(!empty(Auth::user())){//before login

            //after login
            if(Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'supperadmin'){
                if($request->route()->getName() == 'register' || $request->route()->getName() == 'login'){
                    abort(404);
                }

                return $next($request);
            }
            // abort(404);
            return back();
        }
            return $next($request);
    }
}
