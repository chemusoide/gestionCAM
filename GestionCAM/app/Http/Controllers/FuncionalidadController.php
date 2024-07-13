<?php

namespace App\Http\Controllers;

use App\Models\Funcionalidad;
use Illuminate\Http\Request;

class FuncionalidadController extends Controller
{
    public function index()
    {
        $funcionalidades = Funcionalidad::all();
        return response()->json($funcionalidades);
    }

    public function show($id)
    {
        $funcionalidad = Funcionalidad::findOrFail($id);
        return response()->json($funcionalidad);
    }

    public function store(Request $request)
    {
        $funcionalidad = Funcionalidad::create($request->all());
        return response()->json($funcionalidad, 201);
    }

    public function update(Request $request, $id)
    {
        $funcionalidad = Funcionalidad::findOrFail($id);
        $funcionalidad->update($request->all());
        return response()->json($funcionalidad, 200);
    }

    public function destroy($id)
    {
        Funcionalidad::destroy($id);
        return response()->json(null, 204);
    }
}
