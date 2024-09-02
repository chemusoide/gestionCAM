<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $dojos = [];

        if ($user->rol->nombre == 'Administrador') {
            $dojos = Dojo::all();
        } elseif ($user->rol->nombre == 'Shihan') {
            $dojos = $user->gestiona()->get();
        } elseif ($user->rol->nombre == 'Dojo-Cho') {
            $dojos = $user->dirige()->get();
        } else {
            $dojos = $user->alumnos()->first()->dojo()->get();
        }

        return view('home', compact('dojos'));
    }
}