<?php

namespace App\Http\Middleware;

use Closure;

class CheckEnrollmentKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session("enrollmentStatus")) {
            if (session("enrollmentStatus") == "authorized") {
                return $next($request);
            }
        }
        return redirect(route('test.show_all'));
    }
}
