@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-4/12 lg:w-1/12 p-5">
                <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen usuario">
            </div>
            <div class="md:w-4/12 lg:w-1/12 p-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
