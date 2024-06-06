<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('citas_medicas', function (Blueprint $table) {
            $table->increments('id_cita');
            $table->bigInteger('id_paciente');
            $table->string('nombre_paciente')->nullable(false);
            $table->string('nombre_medico')->nullable(false);
            $table->timestamp('fecha_cita');
            $table->string('comentarios')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        //
    }
};
