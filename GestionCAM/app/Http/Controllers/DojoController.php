<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use Illuminate\Http\Request;

class DojoController extends Controller
{
    public function index()
    {
        $dojos = Dojo::all();
        return response()->json($dojos);
    }

    public function show($id)
    {
        $dojo = Dojo::findOrFail($id);
        return response()->json($dojo);
    }

    public function store(Request $request)
    {
        $dojo = Dojo::create($request->all());
        return response()->json($dojo, 201);
    }

    public function update(Request $request, $id)
    {
        $dojo = Dojo::findOrFail($id);
        $dojo->update($request->all());
        return response()->json($dojo, 200);
    }

    public function destroy($id)
    {
        Dojo::destroy($id);
        return response()->json(null, 204);
    }
}
