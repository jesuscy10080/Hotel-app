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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer("num_habitacion");
            $table->integer("num_piso");
            $table->enum("tipo_hab", ['Simple', 'Matrimonial', 'Familiar', 'Especial']);
            $table->integer("capacidad");
            $table->string("descripcion", 500);
            $table->string("foto", 255);
            $table->decimal("precio", 8,2);
            $table->enum("estado", ['Disponible', 'Mantenimiento', 'Limpieza', 'Reservado']);
            $table->text("descripcion_completa");
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
