<?php

namespace App\Http\Controllers;

use App\Models\Paga;
use Illuminate\Http\Request;

class PagaController extends Controller
{
    public function index()
    {
        $pagas = Paga::all();
        return response()->json($pagas);
    }

    public function show($id)
    {
        $paga = Paga::findOrFail($id);
        return response()->json($paga);
    }

    public function store(Request $request)
    {
        $paga = Paga::create($request->all());
        return response()->json($paga, 201);
    }

    public function update(Request $request, $id)
    {
        $paga = Paga::findOrFail($id);
        $paga->update($request->all());
        return response()->json($paga, 200);
    }

    public function destroy($id)
    {
        Paga::destroy($id);
        return response()->json(null, 204);
    }
}
