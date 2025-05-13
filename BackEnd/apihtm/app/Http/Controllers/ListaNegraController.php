<?php

namespace App\Http\Controllers;

use App\Models\ListaNegra;
use Illuminate\Http\Request;

class ListaNegraController extends Controller
{
    // Obtener todas las palabras en lista negra
    public function index()
    {
        return ListaNegra::all();
    }

    // Agregar una nueva palabra a la lista negra
    public function store(Request $request)
    {
        $request->validate([
            'palabra' => 'required|string|max:100|unique:lista_negras',
        ]);

        return ListaNegra::create($request->all());
    }

    // Mostrar una palabra específica
    public function show($id)
    {
        return ListaNegra::findOrFail($id);
    }

    // Actualizar una palabra en la lista negra
    public function update(Request $request, $id)
    {
        $lista = ListaNegra::findOrFail($id);

        $request->validate([
            'palabra' => 'required|string|max:100|unique:lista_negras,palabra,' . $id,
        ]);

        $lista->update($request->all());

        return $lista;
    }

    // Eliminar una palabra de la lista negra
    public function destroy($id)
    {
        $lista = ListaNegra::findOrFail($id);
        $lista->delete();

        return response()->json(['message' => 'Palabra eliminada correctamente.']);
    }
}
