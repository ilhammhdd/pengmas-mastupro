<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $users_roles = session('users_roles');

        if ($users_roles) {
            foreach ($users_roles as $users_role) {
                if ($users_role->nama == $role) {
                    return $next($request);
                }
            }
        } else {
            return redirect(route('landing'));
        }

        return redirect(route('landing'));
    }
}
