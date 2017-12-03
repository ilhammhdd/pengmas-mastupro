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
        $role_user = session('role_user');

        if($role_user){
            foreach($role_user as $the_role){
                if($the_role->nama == $role){
                    return $next($request);
                }
            }
        }

        return redirect(route('unauthenticated'));
    }
}
