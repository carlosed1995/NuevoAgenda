@extends('home')
@section('content')

<!--NUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->


 
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script src="datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
 
<script src="plugins/daterangepicker/daterangepicker.js"></script>   
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>

<link rel="stylesheet" type="text/css" href="datetimepicker/css/bootstrap-datetimepicker.css"/ >

<link rel="stylesheet" type="text/css" href="datetimepicker/css/bootstrap-datetimepicker.min.css"/ >
<script src="datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
 

<div class="row">  

  <div class="col-md-6">

        <div class="box box-primary">
                        <br>
                        <br>
                        <div class="box-header">
                          <h3 class="box-title">Cargar fechas de Calendario</h3>
                        </div><!-- /.box-header -->

        <div id="notificacion_resul_feu"></div>

        {!!Form::open(['route' => 'gerencia.store', 'method' => 'post'])!!}

        <div class="box-body ">

  <div class="form-group col-xs-12">
                              <label for="nombre">Fecha y hora de inicio</label>
                              <input type="text" class="form-control" id="fechaini" name="inicio"  value=""  >
        </div>

        <div class="form-group col-xs-12">
                              <label for="nombre">Fecha y hora final</label>
                              <input type="text" class="form-control" id="fechafin" name="final"  value=""  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="apellido">Titulo</label>
                              <input type="text" class="form-control" id="" name="titulo" value="" >
        </div>

 
<script type="text/javascript">
    $("#fechaini").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
</script>  
<script type="text/javascript">
    $("#fechafin").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
</script>  

      
        </div>

        <div class="box-footer">
            
{!!Form::submit('Crear Horario',['class'=>'btn btn-primary'])!!}


        </div>
  {!!Form::close()!!}
        </div>


  </div> <!-- end col mod 6 -->


 <!--ESTE ES EL OTRO FORMULARIO A DONDE SE SUBEN LAS IMAGENES AQUI EMPIEZA-->
  <div class="col-md-6">


      <div class="box box-primary">
                 
                            
  <table class="table table-hover" id="example">
    <thead>
      <th>Fecha y hora inicial</th>
      <th>Fecha y hora final</th>
      <th>Activo</th>
      <th>Eliminar</th>
      

    
    </thead>
    @foreach($agendas as $agen)

        <td>{{$agen->fechaIni}}</td>
        <td>{{$agen->fechaFin}}</td>
           
    <div class="box-tools pull-right">
      @if($agen['act'])   
    <div class="btn-group">
     <td>
       <a href="{{route('activa.show', $agen->id)}}" class="btn btn-xs btn-success">ON</a>
       <a href="{{route('activa.edit', $agen->id)}}" onclick="return confirm('¿Seguro que deseas desactivar el horario?')" class="btn btn-xs btn-default">OFF</a></td>
    </div>
  @else
    <div class="btn-group">
    <td>
      <a href="{{route('activa.show', $agen->id)}}" onclick="return confirm('¿Seguro que deseas activar el horario?')" class="btn btn-xs btn-default">ON</a>
      <a href="{{route('activa.edit', $agen->id)}}" class="btn btn-xs btn-danger">OFF</a></td>
    </div>
 @endif
  </div>
  
     
     <td>
         <a href="{{route('gerencia.show', $agen->id)}}" onclick="return confirm('¿Esta seguro de eliminar este horario?')" class="btn btn-danger">Eliminar</a>  </td> 
  
        
       
      
          <td>
    <div class="box-tools pull-right">
      
    <div class="btn-group">
    <button type="button" id='{{$agen->id}}' data-id="{{$agen->id}}" class="btn btn-info" data-toggle="modal" data-target="#{{$agen->id}}" data-whatever="@mdo">Editar</button>
    </div>
       


 </td>
  </div>
  </td>
  </tbody>


 <div class="modal fade" id="{{$agen->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agendar Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      
       {!!Form::open(['route'=>['gerencia.update',$agen->id],'method'=>'PATCH'])!!}
        
<div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Fecha y hora inicial</label>
            <input type="text" value="{{$agen->fechaIni}}" class="form-control" id="fechaini1" name="fechaini1" >
          </div>
          <input type="hidden" name="idreser" value="{{$agen->id}}">
           <div class="form-group">
            <label for="recipient-name" class="form-control-label">Fecha y hora Final</label>
            <input type="text" value="{{$agen->fechaFin}}" class="form-control" id="fechafin1" name="fechafin1">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Titulo</label>
            <input type="text" value="{{$agen->titulo}}" class="form-control" id="recipient-name" name="titulo">
          </div>

           


             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

{!!Form::submit('enviar',['class'=>'btn btn-info', 'id'=>'btn'])!!}
{!!Form::close()!!}
      
     

      </div>

      </div>


   
    </div>
  </div>
</div>

  @endforeach

  </table>
 {!!$agendas->render()!!} 
        
<br><br>
    <script type="text/javascript">
    $("#fechaini1").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
</script>  
<script type="text/javascript">
    $("#fechafin1").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
</script>  
           
<div align="center">



</div>
        </div>
 




         
  

</div>

</div>






@endsection