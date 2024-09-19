<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizza.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizza.create');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizza.store');
Route::get('/pizzas/{slug}', [PizzaController::class, 'show'])->name('pizza.show')->middleware('auth');
Route::delete('/pizzas/{slug}', [PizzaController::class, 'destroy'])->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

