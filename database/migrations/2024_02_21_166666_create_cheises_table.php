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
        //chaes
        Schema::create('cheises', function (Blueprint $table) {
            $table->id();
            $table->bool('is_booked');
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignid('reservation_id')->constrained('reservations')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheises');
    }
};
