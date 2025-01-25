<?php

namespace App\Http\Controllers\Candidate\Auth;

use App\Models\Candidate;
use App\Rules\ReCaptcha;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CandidateLoginController extends Controller
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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/candidate/dashboard';



    public function loginForm()
    {
        return view('candidate.auth.login');
    }


    public function login(Request $request)
    { 
        $request->validate([
            'password' => ['required'],
            'email' => ['required', 'email'],
            //'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
    
        $remember_me = $request->has('remember_me') ? true : false;
    
        $check_status = Candidate::where('email', $request->email)->first();
        if ($check_status && $check_status->status_id != 14) {
            return response()->json([
                'class' => 'bg-danger',
                'message' => 'Your account is suspended, please contact support.',
                'error' => true
            ]);
        }
    
        if ($this->guard()->attempt([
                'email' => $request->email, 
                'password' => $request->password
            ], $remember_me)) {
    
            return response()->json([
                'class' => 'bg-success',
                'message' => 'Successfully logged in.',
                'call_back' => route('candidate.dashboard.index'),
                'error' => false
            ]);
        }
        return response()->json([
            'class' => 'bg-danger',
            'message' => 'These credentials do not match our records.',
            'error' => true
        ]);
    }



    public function logout()
    {
        $this->guard()->logout();
        return redirect()->route('candidate.login.form');
    }


    protected function guard()
    {
        return Auth::guard('candidate');
    }

}
