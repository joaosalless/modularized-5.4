<?php

namespace App\Core\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (empty($guard)) {
            $guard = panel()->guard();
        }

        if (Auth::guard($guard)->check()) {
            return redirect($this->getRedirectPath($guard));
        }

        return $next($request);
    }

    protected function getRedirectPath($guard)
    {
        foreach (config('auth.guards') as $guardName => $value) {
            if ($guardName === $guard) {
                return $value['provider'];
            }
        }

        return config('auth.defaults.provider');
    }
}
