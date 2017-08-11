<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gerente;
use Mail;
use DB;
use Laracasts\Flash\Flash;

class ConfimarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aceptar = Gerente::paginate(10);
        return view('formularios.aceptarAgendas')->with('aceptar', $aceptar);
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
        

  



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
     $rechaza = Gerente::find($id);
     $rechaza->actagend = 0;
     $rechaza->save();

     flash('Agenda rechazada correctamente')->error();

     return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
     $acepta = Gerente::find($id);
     $acepta->actagend = 2;
     $acepta->save();

     $solicitante = DB::table('gerente')
            ->join('solicitante','solicitante.id', '=', 'gerente.idsolicitante')
            ->where('gerente.id', '=', $id)
           
            ->select('solicitante.*')
           ->get();
     
           foreach ($solicitante as $key) {
               $key->rut;
               $key->email;
$data = array(
    'rut'=>$key->rut, 
   'email'=>$key->email, 
    
);
    
}


Mail::send('email.confirmarusuario', $data , function($msj) use($data){
    $msj->subject('Correo');
    $msj->to($data['email']);
});
    Flash::success("Agenda confirmada, se le envio un correo electronico al usuario de confirmación");
return redirect()->back();
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
