<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){

        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('name')->get();
        
        return view('pizzas.index',[
            'pizzas' => $pizzas,
            'name' =>  request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id){ 
        $pizzas = Pizza::findOrFail($id);           
        return view('pizzas.show',[ 
            'pizza' => $pizzas,
        ]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        $pizza -> name = request('name');
        $pizza -> type = request('type');
        $pizza -> base = request('base');
        $pizza -> price = request('price');
        $pizza -> toppings = request('toppings');

        $pizza -> save();

        return redirect('/')->with('mssg','Thanks for your order'); //the with send a session data to the view
    }

    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza -> delete();

        return redirect('/pizzas');
    }
}
