@extends('layouts.home')
@section('content')


<link href="../../../public/fullcalendar/fullcalendar.css" rel="stylesheet" />
<link href="../../../public/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="../../../public/moment.min.js"></script>
<script src="../../../public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../../public/plugins/fullcalendar/fullcalendar.min.js"></script>
 
<script src="../../../public/plugins/daterangepicker/daterangepicker.js"></script>   
<script src="../../../public/plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="../../../public/js/sistemalaravel.js"></script> 



<div class="row">  

  <div class="col-md-6">

        <div class="box box-primary">
                        <br>
                        <br>
                        <div class="box-header">
                          <h3 class="box-title">Editar información del Usuario</h3>
                        </div><!-- /.box-header -->

        <div id="notificacion_resul_feu"></div>



        {!!Form::open(['route'=>['listar.update',$usuario->id],'method'=>'PATCH'])!!}
               
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">              


        <div class="box-body ">

  <div class="form-group col-xs-12">
                              <label for="nombre">Rut</label>
                              <input type="text" class="form-control" id="rut" name="rut"  value="<?= $usuario->rut; ?>"  disabled>
        </div>

        <div class="form-group col-xs-12">
                              <label for="nombre">Nombres*</label>
                              <input type="text" class="form-control" id="nombres" name="nombres"  value="<?= $usuario->nombres; ?>"  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="apellido">Apellido Paterno</label>
                              <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" value="<?= $usuario->apellidopaterno; ?>" >
        </div>

        <div class="form-group col-xs-12">
                     
                            
        </div>

        <div class="form-group col-xs-12">
                              <label for="ciudad">Apellido Materno</label>
                              <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" value="<?= $usuario->apellidomat; ?>"  >
        </div>
      
       
        <div class="form-group col-xs-12">
                              <label for="email">Email*</label>
                              <input type="text" class="form-control" id="email" name="email"   value="<?= $usuario->email; ?>" >
        </div>

          <div class="form-group col-xs-12">
                              <label for="email">Telefono*</label>
                              <input type="text" class="form-control" id="telefono" name="telefono"   value="<?= $usuario->telefono; ?>" >
        </div>



        </div>



        <div class="box-footer">
            
{!!Form::submit('Actualizar Datos',['class'=>'btn btn-primary'])!!}

        </div>
   {!!Form::close()!!} 
        </div>


  </div> <!-- end col mod 6 -->


 <!--ESTE ES EL OTRO FORMULARIO A DONDE SE SUBEN LAS IMAGENES AQUI EMPIEZA-->
  <div class="col-md-6">


      <div class="box box-primary">
                 
  

        
<br><br>

            <script src="../../js/calendarscript.js"></script>
     
          

<style>

  #calendar {
    max-width: 450px;
    margin: 0 auto;
  }
</style>




<!--NUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->



  
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
  

 <!--<a href="javascript:void(0);" onclick="cargarformulario(3);" value="formulario">
cargarformulario(3);
  -->

    <div class="box-footer">

<div align="center">

{!!Form::open(['route'=>['agendar.store'],'method'=>'post'])!!}

<input type="hidden" name="iduserk" value="<?= $usuario->id; ?>">
<input type="hidden" name="emailus" value="<?= $usuario->email; ?>">
             
{!!Form::submit('Agendar reunión',['class'=>'btn btn-warning'])!!}
{!!Form::close()!!} 

</div>
        </div>
 




         
  

</div>

</div>
</div>

  


@endsection