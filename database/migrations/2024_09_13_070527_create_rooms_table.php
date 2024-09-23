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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('room_type_id')->constrained('room_types')->onDelete('cascade'); 
            $table->string('floor'); 
            $table->string('room_number'); 
            $table->enum('status', ['available', 'booked', 'maintenance'])->default('available'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms'); // Drop the rooms table if it exists
    }
};
