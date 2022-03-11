@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="grid items-center justify-center grid-cols-1 mx-auto">
            <p class="text-xl">Bonjour {{ Auth::users()->name}} </p>
            <p class="text-xl"> à l'adresse {{ Auth::user()->email }} </p>
        </div>
    </div>
@endsection
