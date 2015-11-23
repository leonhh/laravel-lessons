<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class LogIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::info('user visited from' . $request->ip());

        return $next($request);
    }
}
