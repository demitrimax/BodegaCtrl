<?php

namespace VentasApp\Http\Controllers;


use Illuminate\Http\Request;
use VentasApp\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function index() {
   	$fecha = date('Y-m-d');
    $hora = date('H:i:s');
    $FechaActual = $fecha.' '.$hora;
    $lastlogin = User::find(Auth::user()->id);
    $lastlogin->lastlogin = $FechaActual;
    $lastlogin->save();
    	return view('admin.dashboard');
    }
}
