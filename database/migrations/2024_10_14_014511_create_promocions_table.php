<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promociones', function (Blueprint $table) {
            $table->id();
            $table->string("tipo_promocion", 100);
            $table->date("fecha_inicio");
            $table->date("fecha_final");
            $table->string("condicion_promo", 100);
            $table->integer("descuento");
            $table->string("descripcion", 500);
            $table->text("descripcion_completa");
            $table->string("imagen", 255);
            $table->enum("estado", ['Activo', 'Inactivo']);

            $table->timestamps();
            
        });

    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones');
    }
};
