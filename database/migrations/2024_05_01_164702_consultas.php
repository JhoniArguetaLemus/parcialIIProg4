<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id_consulta'); 
          
           $table->date('fecha');
           $table->string('hora');
           
           $table->string('observaciones');
           $table->unsignedBigInteger('id_paciente');
           $table->unsignedBigInteger('id_medico');

           $table->foreign('id_paciente')->references('id_paciente')->on('paciente')->onDelete('cascade');
           $table->foreign('id_medico')->references('id_medico')->on('medicos')->onDelete('cascade');


           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
