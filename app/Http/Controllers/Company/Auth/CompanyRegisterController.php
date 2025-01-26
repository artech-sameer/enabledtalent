<?php

namespace App\Http\Controllers\Company\Auth;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class CompanyRegisterController extends Controller
{
    protected $redirectTo = '/company/dashboard';

    public function registrationForm(){
        if(auth('candidate')->user()){
            return redirect()->route('candidate.dashboard.index');
        }
        return view('company.auth.registration');
    }

    public function registration(Request $request)
    {
        if (Auth::guard('company')->check()) {
            return response()->json([
                'class' => 'bg-warning',
                'message' => 'You have already logged in.',
                'call_back' => route('company.dashboard.index'),
                'error' => true
            ]); 
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'terms_of_service' => ['required']
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = Hash::make($request->password);
        
        if ($company->save()) {
            Auth::guard('company')->login($company); 

            return response()->json([
                'class' => 'bg-success',
                'message' => 'Successfully Registered.',
                'call_back' => route('company.dashboard.index'),
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
            'services.google.client_id' => env('COMPANY_GOOGLE_CLIENT_ID'),
            'services.google.client_secret' => env('COMPANY_GOOGLE_CLIENT_SECRET'),
            'services.google.redirect' => env('COMPANY_GOOGLE_REDIRECT_URI'),
        ]);

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            config([
                'services.google.client_id' => env('COMPANY_GOOGLE_CLIENT_ID'),
                'services.google.client_secret' => env('COMPANY_GOOGLE_CLIENT_SECRET'),
                'services.google.redirect' => env('COMPANY_GOOGLE_REDIRECT_URI'),
            ]);

            $googleUser = Socialite::driver('google')->stateless()->user();

            $company = Company::where('email', $googleUser->getEmail())->first();

            if (!$company) {
                $company = Company::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt(Str::random(16)),
                ]);
            }

            Auth::guard('company')->login($company);

            return redirect()->intended('company/dashboard');
        } catch (\Exception $e) {
            \Log::error('Google OAuth Login Error: ' . $e->getMessage());

            return redirect('/company/login')->withErrors(['msg' => 'Unable to login. Please try again.']);
        }
    }


    protected function guard()
    {
        return Auth::guard('company');
    }
}
