<?php

namespace App\Http\Controllers;

use App\Http\Requests\usuarios\StoreRequest;
use App\Http\Requests\usuarios\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'position' => $request->position,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->age = $request->age;
        $usuario->position = $request->position;

        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->password);
        }

        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = User::where('id', $id)->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
