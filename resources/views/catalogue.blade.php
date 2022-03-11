@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="grid grid-cols-3 gap-4 md:p-20">
    <img src="{{ asset('data/img/split.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/Uncharted.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/endgame.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/house_gucci.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/vaillante.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/boite_noire.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/Shiba.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/Shiba.jpg') }}" class="object-fill w-full h-48" alt="">
    <img src="{{ asset('data/img/Shiba.jpg') }}" class="object-fill w-full h-48" alt="">
</div>
@endsection
