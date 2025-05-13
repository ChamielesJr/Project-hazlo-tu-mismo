<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    public function index() {
        return Comentario::all();
    }
    
    public function store(Request $request) {
        $request->validate([
            'contenido' => 'required|string',
            'usuario_id' => 'required|exists:usuarios,id',
            'receta_id' => 'required|exists:recetas,id',
            'estado_id' => 'required|exists:estados,id',
        ]);
        return Comentario::create($request->all());
    }
    
}
