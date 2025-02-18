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
        Schema::create('investigacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 500);
            $table->text('descripcion')->nullable();
            $table->foreignId('instituto_id')->constrained('institutos')->onUpdated('cascade')->onDeleted('cascade');
            $table->foreignId('tipo_investigacion_id')->constrained('tipo_investigacion')->onUpdated('cascade')->onDeleted('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investigacion');
    }
};