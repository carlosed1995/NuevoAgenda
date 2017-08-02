<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gerente;

class GerenciaController extends Controller
{
    public function index()
    {
        $agendas = Gerente::paginate(5);
    	return view('Gerencia.horario')->with('agendas', $agendas);
 }

    public function store(Request $request){
    	Gerente::create(
    		[
    		'fechaIni'=>$request['inicio'],
    		'fechaFin'=>$request['final'],
    		'color'=>'#00a65a',
    		'titulo'=>$request['titulo'],
        'actcliente'=>1,
    		'act'=>1,
    		]);


return redirect()->back();
    }

    public function update(Request $request, $id)
    {
     $actualizar = Gerente::find($id);

      $actualizar->fechaIni =  $request->fechaini1;
      $actualizar->fechaFin =  $request->fechafin1;
        //$rest->url =  $request->txturl;
        $actualizar->titulo = $request->titulo;
    
     //   $rest->sugerencias =  $request->txtsugerencia;
     
      $actualizar->save();
      
      return redirect()->back()->with('message', 'Actualización Exitosa');

    }

    public function show(Request $request, $id)
    {
    $horario = Gerente::find($id);
    $horario->delete();
    return redirect()->back();


    }
    


}
