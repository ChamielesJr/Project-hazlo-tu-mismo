<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    public function index()
    {
        return Subcategoria::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        return Subcategoria::create($request->all());
    }

    public function show($id)
    {
        return Subcategoria::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $subcategoria = Subcategoria::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:100',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        $subcategoria->update($request->all());

        return $subcategoria;
    }

    public function destroy($id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->delete();

        return response()->json(['message' => 'Subcategoría eliminada correctamente.']);
    }
}
