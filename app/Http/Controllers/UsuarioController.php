<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuarios\index');
    }
    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());
        // Redirigir a la ruta que muestra todos los usuarios
        $usuarios = Usuario::all();
        return view('usuarios\show', compact('usuarios'));
    }
    public function comeBack(){
        return view('usuarios\index');
    }

}
