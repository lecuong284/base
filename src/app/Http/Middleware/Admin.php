<?php

namespace Lecuong\Base\app\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response(trans('lecuong::base.unauthorized'), 401);
            } else {
                return redirect()->guest(config('lecuong.base.route_prefix', 'admin').'/login');
            }
        }

        return $next($request);
    }
}
