<?php

use App\Http\Controllers\HomeCliente;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/index', [HomeCliente::class, 'index']);

Route::get('/create', [HomeCliente::class, 'create']);

Route::get('/', [HomeCliente::class, 'home']);
