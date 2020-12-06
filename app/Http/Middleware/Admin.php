<?php

namespace App\Http\Middleware;

use App\Helpers\PermissionsHelper;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()) {
            if (PermissionsHelper::instance()->getPerms('ADMIN')) {
                return $next($request);
            } else {
                abort(403);
            }
        } else {
            abort(401);
        }

    }
}
