@extends('layouts.app')
<x-layouts.app>
    <div class="wrapper pizza-details">
        <div class="title">
            <!-- Pizza Name -->
            Order for {{ $pizza->name }}
        </div>
        <div class="details">
            <!-- Pizza Description -->
            <p>{{ $pizza->description }}</p>

            <!-- Pizza Price -->
            <p><strong>{{ __('Quantity:') }}</strong> {{ number_format($pizza->price) }}</p>

            <!-- Pizza Base -->
            <p><strong>{{ __('Base:') }}</strong> {{ ucfirst(str_replace('_', ' ', $pizza->base)) }}</p>

            <!-- Pizza Type -->
            <p><strong>{{ __('Type:') }}</strong> {{ ucfirst($pizza->type) }}</p>

            <!-- Pizza Toppings -->
            <p><strong>{{ __('Toppings:') }}</strong>
                <ul>
                   @foreach ($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>
                @endforeach 
                </ul>
                
            </p>
            <form action="{{route('pizza.index',$pizza->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="back">Complete order</button>
            </form>

            <!-- Age (new/classic/vintage) -->
            {{-- <p><strong>{{ __('Age:') }}</strong> {{ ucfirst($pizza->age) }}</p> --}}
        </div>
        <a href="/pizzas" class="back"><- Back to all pizzas</a>
    </div>


</x-layouts.app>
