@extends('layouts.home')

@section('content')
  <!-- <link rel="stylesheet" href="jquerys/css/bootstrap.min.css">
     <script src="jquerys/js/jquery-3.2.1.min.js"></script>

  <script src="jquerys/js/bootstrap.min.js"></script>-->


 {!!Form::open(['route' => 'import.store', 'method' => 'post', 'files' => true])!!}	

  		<div class="form-group">												

												<label class="control-label">Seleccione imagenes</label>
											<input name="archivo" type="file">
												</div>
	{!!Form::submit('Cargar',['class'=>'btn btn-info', 'id'=>'btn'])!!}
   
{!! Form::close() !!}




@endsection