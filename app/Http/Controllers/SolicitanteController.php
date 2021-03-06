<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Solicitud;
use Laracasts\Flash\Flash;


class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $usuarios = Solicitud::search($request->name)->orderBy('id' , 'ASC')->paginate(10);  
       
        
        return view('listados.listado_usuarios')->with("usuarios", $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gerencia.horarioquefunciona');
    }


    

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }


    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Solicitud::find($id);
     return view("formularios.editar")->with("usuario",$usuario);   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $rest = Solicitud::find($id);
      $rest->nombres =  ucwords(strtolower($request->nombres));
      $rest->apellidopaterno =  ucwords(strtolower($request->apellidopaterno));
        //$rest->url =  $request->txturl;
        $rest->apellidomat =  ucwords(strtolower($request->apellidomaterno));
        $rest->email =  $request->email;
        $rest->telefono =  $request->telefono;
     //   $rest->sugerencias =  $request->txtsugerencia;
     
      $rest->save();
      
    Flash::success("Usuario actualizado correctamente");

      return redirect()->back()->with('message', 'Actualización Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
