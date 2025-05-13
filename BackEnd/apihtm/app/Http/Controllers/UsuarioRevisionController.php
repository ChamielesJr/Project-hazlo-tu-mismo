<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioRevisionController extends Controller
{
    //
    public function index() {
        return UsuarioRevision::all();
    }
    
    public function store(Request $request) {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'motivo' => 'required|string',
            'estado_id' => 'required|exists:estados,id',
        ]);
        return UsuarioRevision::create($request->all());
    }
    
}
