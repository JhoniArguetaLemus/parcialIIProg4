<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {

        
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id_medico'); 
            $table->string('nombre'); 
            $table->string('apellido'); 
            $table->string('especialidad'); 
            $table->string('horario_consultas'); 
            $table->string('telefono'); 
            $table->string('correo'); 


          


      
        });
        
    }

    public function down(): void
    {
        //
    }
};
