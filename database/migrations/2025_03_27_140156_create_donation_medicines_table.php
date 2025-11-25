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
        Schema::create('donation_medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('donation_id')->constrained('donations');
            $table->foreignId('medicine_id')->constrained('medicines');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_medicines');
    }
};
