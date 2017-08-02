@extends('layouts.home')

@section('content')

<h1>Lista de clientes</h1>
<table>
	<tr>
	
	<th>Nombre</th>
	<th>Apellido </th>
	<th>cedula</th>
	<th>Email</th>
	
	</tr>
	
	@foreach($clients as $c)
	<tr>
	<td>{{$c->NOMBRE}}</td>
	<td>{{$c->APELLIDO}}</td>
	<td>{{$c->CEDULA}}</td>
	<td>{{$c->EMAIL}}</td>
	</tr>
	@endforeach


	
</table>




@endsection