<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ejemplo;

class EjemploController extends Controller
{
    public function getAllPeople(){
        $datos = Ejemplo::all();
        //dd(count($datos));
        if(count($datos) > 0){
            return response()->json($datos, 200);
        }else{
            return response()->json('No se encontraron datos para mostrar',204);
        }

    }
}
