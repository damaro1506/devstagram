<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request->get('username'));

        //Validacion
        $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|unique:users',
            'email'=> 'required|unique:users|email|max:60',
            'password'=> 'required|confirmed|min:6',

        ]);
        dd('Creando usuario..');
    }
}
