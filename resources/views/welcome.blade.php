@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        @include('layouts.navbar')
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                    </a>

                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        {{ config('app.name') }}
                    </h1>

                    <a href="{{ route('contact') }}">
                        <span>Contactez-nous</span>
                    </a>


                    <ul class="list-reset">
                        <li class="inline px-4">
                            <a href="https://tailwindcss.com" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Tailwind CSS</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://github.com/alpinejs/alpine" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Alpine.js</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel.com" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Laravel</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel-livewire.com" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Livewire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
