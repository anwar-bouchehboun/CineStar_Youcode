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
        Schema::disableForeignKeyConstraints();

        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); 
            $table->foreignId('today_showing_id')->constrained('today_showings')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('seat_id')->constrained('seats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade')->onUpdate('cascade')->after('today_showing_id');
            $table->dateTime('reservation_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserves');
    }
};
