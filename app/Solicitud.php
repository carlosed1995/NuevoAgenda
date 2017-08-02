<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
     protected $table = 'solicitante';
   protected $primarykey = 'id';
     
      protected $fillable = [
       'id', 'rut', 'nombres', 'apellidopaterno',
      'apellidomat',   'email', 'telefono'
    ];

     public function scopeSearch($query, $name)
  {
    return $query->where('rut', 'LIKE', "%$name%");
  }
}

