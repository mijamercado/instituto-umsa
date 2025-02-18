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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->foreignId('facultad_id')->constrained('facultades')->onUpdated('cascade')->onDeleted('cascade');
            $table->text('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('web')->unique()->nullable();
            $table->string('logo')->nullable();
            $table->string('enlace_facebook')->nullable();
            $table->string('enlace_maps')->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};