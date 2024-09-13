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
        Schema::table('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_type'); 
            $table->string('bed_type'); 
            $table->string('floor_room'); 
            $table->json('facilities'); 
            $table->decimal('rate', 8, 2); 
            $table->enum('status', ['available', 'booked', 'maintenance'])->default('available'); 
            $table->timestamps();
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
        Schema::table('rooms', function (Blueprint $table) {
            //
        });
    }
};
