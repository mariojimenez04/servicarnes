<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //Protege las rutas si no esta autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Retornar la pagina principal
    public function index(){
        return view('index');
    }
}
