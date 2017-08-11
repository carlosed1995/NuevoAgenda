<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormulariosController extends Controller
{
    public function index()
	{
		return view('solicitante.index');
	}
}
