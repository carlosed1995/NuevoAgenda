@extends('home')
@section('content')

<div class="row">  

  <div class="col-md-12">

        <div class="box box-primary">
                      
                        <div class="box-header">
    
                       



       


        <div class="box-body ">
 <table class="table table-hover" id="example1">
    <thead>
      <th>Fecha y hora inicial</th>
      <th>Fecha y hora final</th>
      <th>Titulo</th>
    
      <th>Confirmar Agenda</th>
    </thead>
     @foreach($aceptar as $acepta)
        @if($acepta['actagend'] == 1) 
      <tbody>
        <td>{{$acepta->fechaIni}}</td>
        <td>{{$acepta->fechaFin}}</td>
        <td>{{$acepta->titulo}}</td>
        
    <div class="box-tools pull-right">
      @if($acepta['actagend'] == 1)   
    <div class="btn-group">
     <td>
      <a href="{{route('confimar.edit', $acepta->id)}}" onclick="return confirm('Cita Confirmada le llegara al usuario un correo electronico con la confirmacion de la cita')" class="btn btn-xs btn-default">Confirmar</a></td>
    </div>
  @else
    <div class="btn-group">
    <td>
 <a href="" class="btn btn-xs btn-success">Agenda Confirmada</a></td>
    </div>
 @endif
  </div>
 

  <td>
  <a href="{{route('confimar.show', $acepta->id)}}" onclick="return confirm('¿Esta seguro de cancelar la cita?')" class="btn btn-xs btn-danger">Rechazar</a>
  
  </td>

  </tbody>
  @endif
  @endforeach

  </table>                


        </div>

    
      

  </div>    <!-- end col mod 6 -->


   
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->
 
{!!$aceptar->render()!!}
@endsection






















