<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gerente;
use Laracasts\Flash\Flash;

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
    		'color'=>'#24B3E7',
    		'titulo'=>$request['titulo'],
        'actcliente'=>1,
    		'act'=>1,
            'actagend'=>0
    		]);
Flash::success("Agenda creada exitosamente");
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
      Flash::success("Agenda actualizada exitosamente");

      
      return redirect()->route('gerencia.index');

    }

    public function show(Request $request, $id)
    {
    $horario = Gerente::find($id);
    $horario->delete();

    flash('Agenda eliminada correctamente')->error();
    return redirect()->route('gerencia.index');


    }
    


}
