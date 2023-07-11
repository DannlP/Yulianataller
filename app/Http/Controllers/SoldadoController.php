<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Soldado;

class SoldadoController extends Controller
{
    public function store(Request $request)
    {
        $soldado = new soldado;
        $soldado->nombre = $request->input('nombre');
        $soldado->edad = $request->input('edad');
        $soldado->save();

        return redirect()->back()->with('success', 'Soldado creado exitosamente.');


    }  

    }





