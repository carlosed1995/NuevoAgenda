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
            $table->integer('iduser')->unsigned();
            $table->integer('idreser')->unsigned();
            $table->string('fechaini')->nullable();
            $table->string('fechafin')->nullable();
            $table->string('titulo')->nullable();
            $table->string('motivo1')->nullable();
            $table->string('motivo2')->nullable();
            $table->string('motivo3')->nullable();
            $table->string('observaciones')->nullable();
            
         $table->foreign('iduser')->references('id')->on('solicitante');
         
        $table->foreign('idreser')->references('id')->on('gerente');
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
