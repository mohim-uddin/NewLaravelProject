<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeMiddleware
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
        if($request->age <= 30){
            return redirect('all-pages');
            //jdi 30 teke kom hy tahole all page show korbe otherwise single page page show korbe(note: jodi route hisebe single-page de o)
        }
        return $next($request);
    }
}
