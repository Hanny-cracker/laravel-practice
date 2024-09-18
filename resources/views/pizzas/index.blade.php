<x-layouts.app>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                {{ __('Pizza List') }} 
            </div>

            @foreach ($pizzas as $pizza)
                <div class="">
                    Name : {{ $pizza->name }} - 
                    Type : {{ $pizza->type }} - 
                    Base : {{ $pizza->base }} - 
                    Toppings :
                        @foreach ($pizza->toppings as $topping)
                               & {{ $topping }} 
                        @endforeach              -        
                    Price : {{ $pizza->price }}
                </div>
            @endforeach

            <!-- If there are no pizzas, show a message -->
            @if ($pizzas->isEmpty())
                {{ __('No pizzas available at the moment.') }}
            @endif
            <a href="/">Return to Home</a>
        </div>
    </div>
</x-layouts.app>
