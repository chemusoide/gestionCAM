<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return response()->json($usuario);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $usuario = new User($request->all());

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/users', 'public');
            $usuario->img = $path;
        }

        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->update($request->all());
        
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/users', 'public');
            $usuario->img = $path;
        }
        return response()->json($usuario, 200);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}
