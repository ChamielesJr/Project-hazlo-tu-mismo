<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    // Obtener todos los estados
    public function index()
    {
        return Estado::all();
    }

    // Crear un nuevo estado
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100|unique:estados',
        ]);

        return Estado::create($request->all());
    }

    // Mostrar un estado específico
    public function show($id)
    {
        return Estado::findOrFail($id);
    }

    // Actualizar un estado
    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:100|unique:estados,nombre,' . $id,
        ]);

        $estado->update($request->all());

        return $estado;
    }

    // Eliminar un estado
    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();

        return response()->json(['message' => 'Estado eliminado correctamente.']);
    }
}
