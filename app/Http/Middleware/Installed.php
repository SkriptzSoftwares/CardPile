<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Storage;

class Installed
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
        if(Storage::disk('local')->exists('installed')) {
            return $next($request);
        } else {
            return dd(\Illuminate\Support\Facades\Storage::files(''));
        }
    }
}
