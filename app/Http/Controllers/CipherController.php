<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CipherController extends Controller
{
     public function showCripher($tipo){
        if ($tipo === 'cesar') {
            return view('components.cifrado-cesar'); // Asegúrate de que este archivo exista
        } else if ($tipo === 'escitala') {
            return view('components.cifrado-escitala'); // Asegúrate de que este archivo exista
        }

        return abort(404);

     }
}
