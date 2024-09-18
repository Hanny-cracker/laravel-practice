<x-layouts.app>
    <main>
        <div class="content">
            <img src="{{ asset('/img/pizza-house1.png') }}" width="80%" alt="">
            <div class="title">
                {{ __(" HANNY'S BEST PIZZA") }}
            </div>
            <p class="mssg">{{session('mssg')}}</p>
            <a href="/pizzas">View Pizza list</a>
            <a href="/pizzas/create">Create new pizza</a>
        </div>
    </main>
</x-layouts.app>
