<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        //Check password hash
        if (!$user || !Hash::check($req->password, $user->password)) {
            //Invalid login username or password!
            return redirect()->back();
        } else {
            //username & password matches
            if ($user->email  == 'admin@test.com') {
                Auth::login($user);

                return redirect('/dashboard?route=blogs');
            }
        }
    }
    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
