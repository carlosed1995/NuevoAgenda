<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendaClientM extends Model
{
      protected $table = 'agendasclients';
	protected $primarykey = 'id';

	protected $fillable = [
	'iduser', 'idreser', 'fechaini', 'fechafin','titulo', 'motivo1',
	'motivo2', 'motivo3', 'observaciones', 'actagend'
	];
}
