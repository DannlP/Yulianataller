<?php

use app\models\servicio;
use Illuminate\Http\Request;

class servicioController extends Controller
{
    public function store(Request $request)  
    {
        $servicio = new servicio;
        $servicio->nombre = $request->input('nombre');

        $servicio->save();
        return redirect()->back()->with('success', 'Servicio creado exitosamente.');
    }

    }

