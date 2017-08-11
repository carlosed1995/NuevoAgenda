@extends('home') 

@section('content')
  <!-- <link rel="stylesheet" href="jquerys/css/bootstrap.min.css">
     <script src="jquerys/js/jquery-3.2.1.min.js"></script>

  <script src="jquerys/js/bootstrap.min.js"></script>-->

  <h1>Buscar usuario por Rut</h1>


  		{!!Form::open(['route' => 'listar.index', 'method' => 'get', 'class' => 'navbar-form'])!!}
<div class="input-group">
 
  {!! Form::text('name', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar usuario por RUT', 'aria-describedby' => 'Buscar' ])!!}

  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close()!!}


  <!-- Navbar content -->





@endsection