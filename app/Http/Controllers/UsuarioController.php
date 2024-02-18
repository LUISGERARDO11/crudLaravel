<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $usuarios = Usuario::paginate(10);
        return view('index',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nombre'=>'required',
            'apellido_p'=>'required',
            'apellido_m'=>'required',
            'correo'=>'required',
            'numero'=>'required',
            'contrasenia' => 'required',
                'string',
                'min:8',
                'max:20',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'fecha_nacimiento'=>'required'
        ]);

        Usuario::create($request->all());
        return redirect()->route('usuarios.index')->with('success','Nuevo usuario agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $usuario = Usuario::find($id);
        return view("edit", ["usuario" => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario):RedirectResponse
    {
        $request->validate([
            'nombre'=>'required',
            'apellido_p'=>'required',
            'apellido_m'=>'required',
            'correo'=>'required',
            'numero'=>'required',
            'contrasenia' => 'required',
                'string',
                'min:8',
                'max:20',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'fecha_nacimiento'=>'required'
        ]);

        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success','Nuevo usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario):RedirectResponse
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario eliminado exitosamente');
    }
}
