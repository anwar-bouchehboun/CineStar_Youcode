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
        Schema::create('today_showings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained('films')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('showing_time', ['21:00 PM', '23:00 PM']);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('today_showings');
    }
};
