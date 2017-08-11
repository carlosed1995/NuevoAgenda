<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaClientMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendasclients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser')->nullable();
            $table->integer('idreser')->nullable();
            $table->string('fechaini')->nullable();
            $table->string('fechafin')->nullable();
            $table->string('titulo')->nullable();
            $table->string('motivo1')->nullable();
            $table->string('motivo2')->nullable();
            $table->string('motivo3')->nullable();
            $table->string('observaciones')->nullable();
            
        
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
        Schema::drop('agendasclients');
    }
}
