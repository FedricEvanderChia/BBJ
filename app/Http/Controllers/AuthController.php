<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function index() {
        return view('login');

    }
    
    public function auth(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $rememberMe = $request->remember_Me;
        $isRemember = false;
        if($rememberMe){
            $isRemember = true;
        }

        if(Auth::attempt(
            [
                'username' => $username, 
                'password' => $password,
            ], $isRemember,
        )){
            if($isRemember){
                $key = Auth::getRecallerName();
                $value = Auth::user()->getRememberToken();
                Cookie::queue($key, $value, 1);

            }
            return redirect()->intended('');
            //user
        }
        return back();
    }
    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
