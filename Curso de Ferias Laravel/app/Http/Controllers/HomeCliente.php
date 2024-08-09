<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCliente extends Controller
{

    public function index(Request $request){
        return view('clientes');
    }

    public function create(Request $request){
        return view('create');
    }

    public function home(Request $request){
        return view('home');
    }

}
