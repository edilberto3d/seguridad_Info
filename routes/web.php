<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CipherController;
use Illuminate\Support\Facades\Route;


//Ruta Principal
Route::get('/', HomeController::class, 'index');


Route::get('/{tipo}', [CipherController::class, 'showCripher']);


