<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    
    public function comingSoon(){
        return view('coming-soon');
    }

    public function comingSoonPassword(Request $request){
        $request->validate([
            'password' => ['required'],
        ]);
        
        $password = $request->input('password');

        if ($password === env('COMING_SOON_PASSWORD')) {
            $request->session()->put('coming_soon_passed', true);
            return redirect()->route('web.home');
        }

        return redirect()->back()->with('error', 'Invalid password. Please try again.');
    }
}
