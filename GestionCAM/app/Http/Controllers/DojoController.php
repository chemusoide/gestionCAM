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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dojo = new Dojo($request->all());

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/dojos', 'public');
            $dojo->img = $path;
        }

        $dojo->save();

        return response()->json($dojo, 201);
    }

    public function update(Request $request, $id)
    {
        $dojo = Dojo::findOrFail($id);
        $dojo->update($request->all());
        
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/dojos', 'public');
            $dojo->img = $path;
        }
        return response()->json($dojo, 200);
    }

    public function destroy($id)
    {
        Dojo::destroy($id);
        return response()->json(null, 204);
    }
}
