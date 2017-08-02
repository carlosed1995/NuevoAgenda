<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Solicitud;

class ListadoController extends Controller
{
    	public function listado_usuarios()
   {

        $usuarios= Solicitud::paginate(10);
        
        return view('listados.listado_usuarios')->with("usuarios", $usuarios);
     
	}
}
