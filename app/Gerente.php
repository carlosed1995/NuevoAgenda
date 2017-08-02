<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{

	protected $table = 'gerente';
	protected $primarykey = 'id';

	protected $fillable = [
	'id','fechaIni', 'fechaFin', 'act' ,'color', 'titulo', 'actcliente', 'actagend'
	];

}
