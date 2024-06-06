<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('inventario', function(Blueprint $table){
            $table->increments('id_medicamento');
            $table->string('nombre_medicamento');
            $table->integer('cantidad_disponible');
            $table->date('fecha_caducidad');
            $table->string('descripcion');

        });
    }

    
    public function down(): void
    {
        //
    }
};
