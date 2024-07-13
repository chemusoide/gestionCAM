<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_usuario')->constrained('users');
            $table->foreignId('fk_dojo')->constrained('dojos');
            $table->date('fechaAlta')->nullable();
            $table->date('fechaBaja')->nullable();
            $table->boolean('dojoCho')->default(false);
            $table->text('obs')->nullable();
            $table->timestamps();
            $table->string('usuarioCreacion')->nullable();
            $table->string('usuarioModificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
