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
        Schema::create('paga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_usuario')->constrained('users');
            $table->foreignId('fk_cuota')->constrained('cuotas');
            $table->timestamps();
            $table->string('usuario_creacion')->nullable();
            $table->string('usuario_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paga');
    }
};
