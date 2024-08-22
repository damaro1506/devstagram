<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request){

        //dd('entre bien');

        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if(!Auth::attempt(['email'=> $request->email,'password'=> $request->password],$request->remember)){
            return back()->with('mensaje','Credenciales incorrectas');
        }

        return redirect()->route('posts.index');
    }

}
