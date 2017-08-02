<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_table extends Model
{

     protected $table = 'UsersTable';
     protected $primarykey = 'id';

      protected $fillable = [
       'id', 'rut', 'nombres', 'apellidopaterno',
      'apellidomat',   'email', 'telefono'
    ];
}
