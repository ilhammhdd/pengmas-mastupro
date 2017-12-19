<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $users_role = Auth::user()->role()->get();
        session()->put('users_roles', $users_role);

        foreach ($users_role as $the_roles) {
            if ($the_roles->nama == "admin") {
                session()->put('the_role', $the_roles->nama);

                return redirect(route('admin.index'));
            } else if ($the_roles->nama == 'guru') {
                session()->put('the_role', $the_roles->nama);

                return redirect(route('guru.index'));
            } else if ($the_roles->nama == 'siswa') {
                session()->put('the_role', $the_roles->nama);

                return redirect(route('siswa.index'));
            }
        }
    }

    public function username()
    {
        return 'username';
    }

    public function logout(Request $request)
    {
        $request->session()->forget('users_roles');
        $request->session()->forget('takingTest');

        $this->guard()->logout();

        $request->session()->invalidate();

        return response()->json([
            'succes' => true,
            'url' => route('landing'),
            'message' => 'successfully logout and deleted localStorage'
        ]);
    }
}
