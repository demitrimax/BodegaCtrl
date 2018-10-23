<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Categorias;
use Intervention\Image\ImageManager;
use File;

class CategoriasController extends Controller
{
    //
    public function index() {
    	$categorias = Categorias::all();
    	return view('admin.categorias.index')->with(compact('categorias'));
    }
    public function agregar() {
    	return view('admin.categorias.agregar');
    }
    public function guardar(Request $request) {

    	$messages = [
    			'nombre.required' 			=> 'El nombre es necesario',
    			'nombre.min' 				=> 'El nombre de la categoria debe contener al menos :min caracteres',
    			'nombre.unique'				=> 'Ya existe una categoría con ese nombre',
    			'nombre.max'				=> 'El nombre de la categoría no debe exeder :max caracteres',
    			'descripcion.required'		=> 'La descripción es requerida',
    			'descripcion.max'			=> 'La descripción solo adminite 200 caracteres',
    			'foto.size'					=> 'El tamaño del archivo supera el limite :size Kilobytes',
    			'foto.image'				=> 'El archivo tiene que ser una imagen'
    	];

    	$rules = [
            'nombre' => 'required|min:5|max:15|unique:categorias',
            'descripcion' => 'required|max:200',
            'foto' => 'image'
        ];

        $this->validate($request, $rules, $messages);

    	$categoria = new Categorias();
    	$categoria->nombre = $request->input('nombre');
    	$categoria->descripcion = $request->input('descripcion');
    	//dd($request);
    	//die;
    	$file = $request->file('foto');
    	if ($file) {
    	$path = public_path() . '/categoria/';
    	$filename = uniqid().$file->getClientOriginalName();
    	$file->move($path, $filename);
    		$categoria->foto = 'categoria/'.$filename;
    	}
    	$categoria->save();

    	$mensaje = "swal('Excelente','Se agregó correctamente la categoria','success')";
    	return redirect('/admin/categorias')->with(compact('mensaje'));
    }

     public function eliminar(request $request, $id){
    	//eliminar el archivo
    	$categoria = Categorias::find($request->id);
    	
    	//eliminar el registro en la bd
    		$categoria->delete();
    		$mensaje = "swal('Eliminado','Se agregó correctamente la categoria','sucess')";
    	return back()->with(compact('mensaje'));
    }
}
