<?php

namespace App\Http\Middleware;

use App\Helpers\PermissionsHelper;
use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if(PermissionsHelper::instance()->getPerms($permission)) {
            return $next($request);
        } else {
            abort(403);
        }
    }
}
