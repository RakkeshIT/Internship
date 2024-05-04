<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\regis;

class loginController extends Controller
{
    public function authentication(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = regis::where('email', $email)->first();
            Auth::login($user);
            return redirect('/home');
        } else {
            return back()->withErrors('Invalid Cradintials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
