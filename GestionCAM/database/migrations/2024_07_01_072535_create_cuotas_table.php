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
        Schema::create('cuotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_dojo')->constrained('dojos');
            $table->string('nombre');
            $table->float('cantidad');
            $table->text('obs')->nullable();
            $table->timestamps();
            $table->string('usuarioCreacion')->nullable();
            $table->string('usuarioModificacion')->nullable();
            // Definir clave foránea
            $table->foreign('fk_dojo', 'fk_cuota_dojo')
                  ->references('id')->on('dojos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuotas');
    }
};
