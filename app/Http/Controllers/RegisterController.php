<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd('entre mal');

        //Modificar el Request
        $request->request->add(['username' => Str::slug($request->username)]);

        //Validacion
        $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|unique:users',
            'email'=> 'required|unique:users|email|max:60',
            'password'=> 'required|confirmed|min:6',

        ]);

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> $request->password,

        ]);

        //funciones para autenticar
        Auth::attempt(['email'=> $request->email,'password'=> $request->password]);

        //otra forma
        //auth()->attempt([$request->only('email','password')]);
        return redirect()->route('posts.index');
    }
}
