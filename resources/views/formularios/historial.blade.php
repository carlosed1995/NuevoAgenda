@extends('home')
@section('content')

 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
 <h1>Historial de Reuniones Concretadas</h1>
      <table class="table table-hover" id="example1">
		<thead>
		<th>Rut</th>
			<th>Nombres </th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Fecha y Hora</th>
			<th>Fecha y Hora</th>
		</thead>

		@foreach($usuarioslist as $usuarios)
		@if($usuarios['actagend'] == 2)

<?php
		$solicitante = DB::table('solicitante')
            ->join('gerente','gerente.idsolicitante', '=', 'solicitante.id')
           ->where('solicitante.id', '=', $usuarios->id)
            ->select('solicitante.*')
           ->get();?>

				
			<tbody>
		@foreach($solicitante as $datos)

		<td>{{$datos->rut}}</td>
				<td>{{$datos->nombres}}</td>
				<td>{{$datos->apellidopaterno}}</td>
				<td>{{$datos->apellidomat}}</td>
				
					<td>{{$usuarios->fechaIni}} </td>
                 <td>{{$usuarios->fechaFin}}</td>
	

	</tbody>
	@endforeach
	@endif
	@endforeach

	</table>

		 </div>
</div>
</div>

{!!$usuarioslist->render()!!}
@endsection