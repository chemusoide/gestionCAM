<?php

namespace App\Http\Controllers;

use App\Models\Cuota;
use Illuminate\Http\Request;

class CuotaController extends Controller
{
    public function index()
    {
        $cuotas = Cuota::all();
        return response()->json($cuotas);
    }

    public function show($id)
    {
        $cuota = Cuota::findOrFail($id);
        return response()->json($cuota);
    }

    public function store(Request $request)
    {
        $cuota = Cuota::create($request->all());
        return response()->json($cuota, 201);
    }

    public function update(Request $request, $id)
    {
        $cuota = Cuota::findOrFail($id);
        $cuota->update($request->all());
        return response()->json($cuota, 200);
    }

    public function destroy($id)
    {
        Cuota::destroy($id);
        return response()->json(null, 204);
    }
}
