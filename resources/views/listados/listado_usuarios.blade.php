@extends('home')
@section('content')

{!!Form::open(['route' => 'listar.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
 
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario por RUT', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close()!!}


<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">Usuarios Encontrados</h3>
                </div>

<div class="box-body">              




<table id="tabla_usuarios" class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Nombres</th>
              <th>Rut</th>
                <th>email</th>
               
                <th>Fecha Creado</th>


             
              <th>Acción</th>
            </tr>
        </thead>
 
        
       
<tbody>



@if(count($usuarios)>0)
   @foreach($usuarios as $usuario)

 <tr role="row" class="odd">
    <td class="sorting_1"><?= $usuario->id; ?></td>
    <td class="mailbox-messages mailbox-name" ><a href=""   style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= $usuario->nombres." ".$usuario->apellidopaterno;  ?></a></td>
    <td><?= $usuario->rut;  ?></td>
    <td><?= $usuario->email;  ?></td>
    <td><?= $usuario->created_at;  ?></td>
    <td>
   {!!link_to_route('listar.edit', $title = 'Ver', $parameters = [$usuario->id], $attributes = ['class'=>'btn btn-skin-green btn-xs fa fa-fw fa-eye'])!!}
  
    </td>
</tr>

@endforeach
@else
<div class="alert alert-dismissable alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h4>Mensaje del sistema!</h4>
  <p>Rut invalida por favor ingrese los datos correctos</p>
</div>

@endif


  

    </table>

{{$usuarios->render()}}

</div>



@endsection