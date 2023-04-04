<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){

        return view('login.login'); //diarahkan ke form login
    }

     public function postlogin(Request $request){

     $dataLogin = [
        'username' => $request->username,
        'password' => $request->password
    ];
    if (\Auth::attempt($dataLogin)) {
        session(['username' => $request->username]);
        return redirect('/info/index');
        
    }else{
        dd('gagal');
    }


 }
}
