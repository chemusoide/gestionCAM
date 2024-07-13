<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    public function index()
    {
        $grados = Grado::all();
        return response()->json($grados);
    }

    public function show($id)
    {
        $grado = Grado::findOrFail($id);
        return response()->json($grado);
    }

    public function store(Request $request)
    {
        $grado = Grado::create($request->all());
        return response()->json($grado, 201);
    }

    public function update(Request $request, $id)
    {
        $grado = Grado::findOrFail($id);
        $grado->update($request->all());
        return response()->json($grado, 200);
    }

    public function destroy($id)
    {
        Grado::destroy($id);
        return response()->json(null, 204);
    }
}
