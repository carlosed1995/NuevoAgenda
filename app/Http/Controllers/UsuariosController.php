<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Solicitud;
use App\Gerente;
use Storage;

use Excel;


class UsuariosController extends Controller {
	public function index()
	{
   return view("formularios.form_cargar_datos_usuarios");
	}



		public function editar_usuario(Request $request)
	{

		$data=$request->all();
		$idUsuario=$data["id_usuario"];
		$usuario=Solicitud::find($idUsuario);
        $usuario->nombres  =  $data["nombres"];
		$usuario->apellidopaterno=$data["apellidopaterno"];
		$usuario->apellidomat=$data["apellidomaterno"];
		$usuario->email=$data["email"];
		$usuario->telefono=$data["telefono"];
	
		
		$resul= $usuario->save();

		if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Datos actualizados Correctamente");   
		}
		else
		{            
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
		}
	}



	public function form_cargar_datos_usuarios(){

       return view("formularios.form_cargar_datos_usuarios");

	}

	public function cargar_datos_calendar(){
	$agendas = Gerente::paginate(4);  

		return view("formularios.form_cargar_datos_calendar")->with('agendas', $agendas);

	}


    public function cargar_datos_usuarios(Request $request)
	{
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
	   $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
       	   
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
		        
		        $hoja->each(function($fila) {
			        $usersemails=Solicitud::where("email","=",$fila->email)->first();
			        if(count( $usersemails)==0){
				   
     $data = array("rut" => $fila->rut,
        "nombres"=> ucwords(strtolower($fila->nombres)),
        "apellidopaterno"=> ucwords(strtolower($fila->apellidopaterno)),
        "apellidomat"=> ucwords(strtolower($fila->apellidomat)),
        "email"=> $fila->email,
        "telefono"=> $fila->telefono);                                                                           

$registrar = Solicitud::create(
       $data
				);	
	                }
		     
		        });

            });

            return view("mensajes.msj_correcto")->with("msj"," Usuarios Cargados Correctamente");
    	
       }
       else
       {
       	    return view("mensajes.msj_rechazado")->with("msj","Error al subir el archivo");
       }

	}




}
