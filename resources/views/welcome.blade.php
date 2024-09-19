@extends('layouts.app')
<x-layouts.app>
    <main>
        <div class="x-layout">
            <img src="{{ asset('/img/pizza-house1.png') }}" width="80%" alt="">
            <div class="title">
                {{ __(" HANNY'S BEST PIZZA") }}
            </div>
            {{-- the session is used to display the session data from tne controller redirect --}}
            <p class="mssg">{{session('mssg')}}</p> 
            <a href="{{route('pizza.index')}}">View Pizza list</a>
            <a href="{{route('pizza.create')}}">Create new pizza</a>
        </div>
    </main>
</x-layouts.app>
