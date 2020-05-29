<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){

        return view('backend.login');
    }

    public function postLogin(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if ($request->remember = 'Remember me'){
            $Remember = true;
        }else{
            $Remember = false;
        }
        if (Auth::attempt($arr,$Remember)){
            return redirect()->route('home');
        }else{

            return redirect()->back()
                ->with('erro', 'Tài Khoản mật khẩu chưa đúng !');
        }
    }





}
