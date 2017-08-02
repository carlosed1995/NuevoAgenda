@extends('layouts.home')
@section('content')



<link href="fullcalendar/fullcalendar.css" rel="stylesheet" />
<link href="fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="moment.min.js"></script>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
 
<script src="plugins/daterangepicker/daterangepicker.js"></script>   
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="js/sistemalaravel.js"></script>   

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
             <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </div>
        </form>
        </div>


  </div> <!-- end col mod 6 -->


 <!--ESTE ES EL OTRO FORMULARIO A DONDE SE SUBEN LAS IMAGENES AQUI EMPIEZA-->
  <div class="col-md-6">


      <div class="box box-primary">
                 
  

     {!!Form::close()!!}      
<br><br>

            <script src="js/calendarscript.js"></script>
     
          

<style>

  #calendar {
    max-width: 500px;
    margin: 0 auto;
  }
</style>




<!--NUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->



<div class="row">

  
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
  

 <!--<a href="javascript:void(0);" onclick="cargarformulario(3);" value="formulario">
cargarformulario(3);
  -->

 <div class="box-footer">

 <a href="" onclick="" value="formulario">

<button id='submitCreate' type="button"  class="btn btn-warning" type="button">Solicitar Reunion</button></a>

        </div>
 




         
  

</div>




      </form>

      <!--ESTE ES EL OTRO FORMULARIO A DONDE SE SUBEN LAS IMAGENES AQUI FINALIZA-->

      </div>

  </div>    <!-- end col mod 6 -->


    <!--<div class="col-md-6">

<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Cambiar Password</h3>
                </div>

                <div id="notificacion_resul_fcp"></div>
              
                <form method="post" id="f_cambiar_password" class="form_entrada" action="cambiar_password" >
                     <input type="hidden" name="id_usuario_password" value="<?= $usuario->id; ?>"> 
                   <input type="hidden" name="_token" id="_token"  value="<//?= csrf_token(); ?>"> 
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Entrar email" value="<?= $usuario->email; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario" placeholder="Password">
                    </div>
                  
                    
                  </div>--><!-- /.box-body -->

                <!--  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Datos</button>-->
                  </div>
                </form>



                
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->



@endsection