<?php

namespace App\Http\Controllers\Candidate\Auth;

use App\Models\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class CandidateRegisterController extends Controller
{
    protected $redirectTo = '/candidate/dashboard';

    public function registrationForm()
    {
        return view('candidate.auth.registration');
    }

    public function registration(Request $request)
    {
        if (Auth::guard('candidate')->check()) {
            return response()->json([
                'class' => 'bg-warning',
                'message' => 'You have already logged in.',
                'call_back' => route('candidate.dashboard.index'),
                'error' => true
            ]); 
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $candidate = new Candidate;
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->password = Hash::make($request->password);
        
        if ($candidate->save()) {
            Auth::guard('candidate')->login($candidate); 

            return response()->json([
                'class' => 'bg-success',
                'message' => 'Successfully Registered.',
                'call_back' => route('candidate.dashboard.index'),
                'error' => false
            ]);
        }

        return response()->json([
            'class' => 'bg-danger',
            'message' => 'Registration failed. Please try again.',
            'error' => true
        ]);
    }


    public function redirectToGoogle(){
        config([
            'services.google.client_id' => env('candidate_GOOGLE_CLIENT_ID'),
            'services.google.client_secret' => env('candidate_GOOGLE_CLIENT_SECRET'),
            'services.google.redirect' => env('candidate_GOOGLE_REDIRECT_URI'),
        ]);

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            config([
                'services.google.client_id' => env('candidate_GOOGLE_CLIENT_ID'),
                'services.google.client_secret' => env('candidate_GOOGLE_CLIENT_SECRET'),
                'services.google.redirect' => env('candidate_GOOGLE_REDIRECT_URI'),
            ]);

            $googleUser = Socialite::driver('google')->stateless()->user();

            $candidate = Candidate::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt('default_password'),
                ]
            );

            Auth::guard('candidate')->login($candidate);

            return redirect()->intended('candidate/dashboard');
        } catch (\Exception $e) {
            return redirect('/candidate/login')->withErrors(['msg' => 'Unable to login.']);
        }
    }

    protected function guard()
    {
        return Auth::guard('candidate');
    }
}
