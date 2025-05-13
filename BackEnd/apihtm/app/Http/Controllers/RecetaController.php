<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        return Receta::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'ingredientes' => 'required|json',
            'procedimiento' => 'required|json',
            'imagen' => 'nullable|string',
            'usuario_id' => 'required|exists:usuarios,id',
            'categoria_id' => 'required|exists:categorias,id',
            'subcategoria_id' => 'required|exists:subcategorias,id',
            'estado_id' => 'required|exists:estados,id',
        ]);

        return Receta::create($request->all());
    }
}
