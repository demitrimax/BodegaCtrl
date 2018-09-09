<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\User;

class UsuariosController extends Controller
{
    //
    public function index()
    {
      $usuarios = User::all();
      return view('admin.usuarios.index')->with(compact('usuarios'));
    }

    public function editar($id)
    {
      $usuario = User::find($id);
      return view('admin.usuarios.editar')->with(compact('usuario'));
    }
    public function actualizar(Request $request, $id)
    {
      $usuario = User::find($id);
      $usuario->name = $request->input('nombre');
      $usuario->email = $request->input('email');
      $usuario->profesion = $request->input('profesion');
      $usuario->rol = $request->input('rol');
      $usuario->save();

      return redirect('/admin/usuarios');
    }
    public function agregar()
    {
      return view('admin.usuarios.agregar');
    }
    public function guardar(Request $request)
    {
      $usuario = new User();
      $usuario->name = $request->input('nombre');
      $usuario->email = $request->input('email');
      $usuario->password = bcrypt($request->input('password'));
      $usuario->profesion = $request->input('profesion');
      $usuario->save();

      return redirect('/admin/usuarios');
    }
}
