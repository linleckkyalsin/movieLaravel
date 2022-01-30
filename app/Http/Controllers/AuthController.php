<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getlogin()
    {
        # code...
        return view('/auth/login');
    }
    public function postlogin(Request $request)
    {
        # code...
        $crd=$request->only('email','password');

        if(Auth::attempt($crd)){
            if(Auth::user()->is_admin==='yes'){
               return redirect('/admin/');
            }
            else {
                return redirect()->back()->with('error','Try Again');
            }
        }

    }

}