<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureHeaderIsValid
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
            if($request->header('X-Secure-Code')!='12345678'){
            return response(['error'=>'secure code not valid'],403);
    }
        return $next($request);
    }
}
