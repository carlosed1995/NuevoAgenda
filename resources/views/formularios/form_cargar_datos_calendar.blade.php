@extends('home')
<link rel="stylesheet" type="text/css" href="datatables/css/dataTables.bootstrap.min.css">
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="datatables/js/jquery.dataTables.min.js"></script>
@section('content')

<div class="row">  

  <div class="col-md-12">

        <div class="box box-primary">
                      
                        <div class="box-header">
    
                       


  
       


        <div class="box-body ">


                            
  <table class="table table-hover" id="example">
    <thead>
      <th>Fecha y hora inicial</th>
      <th>Fecha y hora final</th>
     <th>Titulo</th>

     
    </thead>
    @foreach($agendas as $agen)
     @if($agen['act'])
     @if($agen['actagend'] == 0 )
        <td>{{$agen->fechaIni}}</td>
        <td>{{$agen->fechaFin}}</td>
         <td>{{$agen->titulo}}</td>
       
      
          <td>
    <div class="box-tools pull-right">
      
    <div class="btn-group">
    <button type="button" id='{{$agen->id}}' data-id="{{$agen->id}}" class="btn btn-primary" data-toggle="modal" data-target="#{{$agen->id}}" data-whatever="@mdo">Agendar Reunión</button>
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
      
      {!!Form::open(['route' => 'agendarcita.store', 'method' => 'post'])!!}
<div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Fecha y hora inicial</label>
            <input type="text" value="{{$agen->fechaIni}}" class="form-control" id="recipient-name" name="" disabled>
          </div>
          <input type="hidden" name="idreser" value="{{$agen->id}}">
          <input type="hidden" name="iduser" value="{{$iduser}}">
          <input type="hidden" name="useremail" value="{{$emailuser}}">
           <input type="hidden" name="fechainicial" value="{{$agen->fechaIni}}">
           <input type="hidden" name="fechafinal" value="{{$agen->fechaFin}}">
           <div class="form-group">
            <label for="recipient-name" class="form-control-label">Fecha y hora Final</label>
            <input type="text" value="{{$agen->fechaFin}}" class="form-control" id="recipient-name" name="" disabled>
          </div>

            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Motivo 1</label>
            <input type="text" class="form-control" id="recipient-name" name="motivo1">
          </div>

            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Motivo 2</label>
            <input type="text" class="form-control" id="recipient-name" name="motivo2">
          </div>

            <div class="form-group">
            <label for="recipient-name" class="form-control-label">motivo 3</label>
            <input type="text" class="form-control" id="recipient-name" name="motivo3">
          </div>

            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Observaciones</label>
           <textarea class="form-control" name="observaciones"></textarea>
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
@endif
@endif
  @endforeach

  </table>

        </div>

    
      

  </div>    <!-- end col mod 6 -->


   
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->
 
@endsection