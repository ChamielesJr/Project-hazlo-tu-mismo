<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasoController extends Controller
{
    //
    public function index() {
        return Caso::all();
    }
    
    public function store(Request $request) {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'motivo' => 'required|string',
            'estado_id' => 'required|exists:estados,id',
        ]);
        return Caso::create($request->all());
    }
    
}
