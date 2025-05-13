<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaRevisionController extends Controller
{
    //
    public function index() {
        return RecetaRevision::all();
    }
    
    public function store(Request $request) {
        $request->validate([
            'receta_id' => 'required|exists:recetas,id',
            'motivo' => 'required|string',
            'estado_id' => 'required|exists:estados,id',
        ]);
        return RecetaRevision::create($request->all());
    }
    
}
