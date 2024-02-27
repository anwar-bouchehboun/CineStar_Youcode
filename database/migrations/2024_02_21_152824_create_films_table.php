<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //films
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('FilmName');
            $table->string('FilmDesc');
            $table->string('FilmImage');
            $table->string('FilmDuration');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};