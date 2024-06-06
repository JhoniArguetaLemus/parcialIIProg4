<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {

        Schema::create('usuarios', function(Blueprint $table){
            $table->increments('id_usuario'); 
            $table->string('usuario');
            $table->string('contrasenna');
            
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
