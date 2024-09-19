@extends('layouts.app')
<x-layouts.app>
    <div class="wrapper create-pizza">
        <div class="title">
            Create a New Pizza
        </div>

        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type</label>
            <select name="type" id="type">
                <option value="magarita">Magarita</option>
                <option value="hawaiin">Hawaiin</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="type">Choose base type</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy crust</option>
                <option value="garlic crust">Garlic crust</option>
                <option value="thin & crispy">Thin & crispy</option>
                <option value="thick">Thick</option>
            </select>
            <label for="type">Enter quantity</label>
            <input type="number" name="price">
            <fieldset>
                <label for="">Extra toppings:</label></br>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers</br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic</br>
                <input type="checkbox" name="toppings[]" value="olives">Olives</br>
            </fieldset>
            <input type="submit" value="Order Pizza">
            <a href="/" class="back">Return to Home</a>

        </form>
    </div>
</x-layouts.app>
