<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Log::info('login controller');

        $this->middleware('guest')->except('logout');
    }

    public function checkLogin(Request $request)
    {
        $user = \Auth::user();
        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(false, 401);
        }
    }

    public function checkEmail(Request $request)
    {
        $user = \Auth::user();

        $result = false;

        if ($request->email) {
            $user = User::whereEmail($request->email)->first();
            $result = (bool) $user;
        }

        return response()->json($result?"true":"false", 200);
    }

    //  api login override
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        // carl26@16hands.co.nz ==
        // $S$E3lYqyBWf9E0hnDlIT9EpTAwQWKLxsCE/7b9l4Vh2xaNgXg/ge2M
        if ($this->attemptLogin($request)) {
            return $this->SendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        if (\Auth::user() ?? false) {
            \Log::error('Logout request', \Auth::user()->toArray() ?? 'user is NULL');
        }
        //ray(request()->user()->tokens(), request()->user()->currentAccessToken() )->showApp();
        session()->flush();

        auth()->logout();

        \Auth::logout();

        return response()->redirectToRoute('spa', ['/']);
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function SendLoginResponse(Request $request)
    {
        // ?? do we want to do this here ?
        $request->session()
                ->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request,
                                    $this->guard()->user()
                                   ) ?: response()->json('Ok', 200);
    }


}
