<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormulariosController extends Controller
{
    public function form_nuevo_usuario()
	{
		return view('formularios.form_nuevo_usuario');
	}
}
