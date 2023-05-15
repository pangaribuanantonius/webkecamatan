<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(){

        return view('login.login'); //diarahkan ke form login
    }

     public function postlogin(Request $request){

    $login = [
            'username' => $request->username,
            'password' => $request->password
        ];
    if (\Auth::attempt($login)) {
        session(['username' => $request->username]);
        $user = \App\Models\Users::where('username', session()->get('username'))->first();
        if ($user->level == 'Super Admin') {
            return redirect('/user/index');
        }else{
            return redirect('/info/index');
        }
        
    }else{
        return redirect('/login/login?pesan=username atau password salah');
    }


 }

 public function logout(){
        session()->forget('username');
        return redirect(route('login.login'));
    }

}
