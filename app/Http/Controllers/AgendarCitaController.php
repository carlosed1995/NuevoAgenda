<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AgendaClientM;
use Mail;
use Redirect;
use Gerente;
use DB;

class AgendarCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
AgendaClientM::create(
[
'iduser'=> $request['iduser'],
'idreser'=> $request['idreser'],
'fechaini'=> $request['fechainicial'],
'fechafin'=> $request['fechafinal'],
'motivo1'=> $request['motivo1'],
'motivo2'=> $request['motivo2'],
'motivo3'=> $request['motivo3'],
'observaciones' => $request['observaciones'],

]
    );


    $reserva  =  DB::table('gerente')
            ->where('id' ,'=', $request['idreser'])
            ->update(array('actagend' => '1'));
        





Mail::send('email.enviarusuario',$request->all(), function($msjs) use($request){
    $msjs->subject('Agendar Reunión');
    $msjs->to($request['useremail']);
});


Mail::send('email.enviar', $request->all(), function($msj){
    $msj->subject('Correo');
    $msj->to('laravelmailprueba@gmail.com');
});

return view('home')->with("msj","Cita agendada exitosamente, por favor revise su correo electronico");

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
        //
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
        //
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
