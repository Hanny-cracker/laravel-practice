@extends('layouts.app')
<x-layouts.app>
    <div class="pizza-index x-layout">
        <div class="title">
            {{ __('Pizza Orders') }}
        </div>

        @foreach ($pizzas as $pizza)
            <a href="{{route('pizza.index',$pizza->id)}}">
                <div class="pizza-item">
                    <img src="{{ asset('/img/pizza.jpeg') }}" width="20%" alt="pizza icon">
                    <h4>{{ $pizza->name }}</h4>
                </div>
            </a>
        @endforeach

        <!-- If there are no pizzas, show a message -->
        @if ($pizzas->isEmpty())
            <p>{{ __('No pizzas available at the moment.') }}</p>
        @endif
        <a href="/" class="back">Return to Home</a>
    </div>

</x-layouts.app>
