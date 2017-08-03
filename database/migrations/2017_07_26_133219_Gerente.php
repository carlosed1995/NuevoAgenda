<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gerente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('gerente', function (Blueprint $table) {
              $table->increments('id');
            $table->datetime('fechaIni')->nullable();
            $table->datetime('fechaFin')->nullable();
            $table->string('act')->nullable();
            $table->string('color')->nullable();
            $table->string('titulo')->nullable();
            $table->string('actagend')->nullable();
            $table->string('actcliente')->nullable();
             
             $table->int('idsolicitante')->nullable();
            $table->timestamps();
                  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gerente');
    }
}
