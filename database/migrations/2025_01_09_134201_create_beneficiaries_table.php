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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('document',false,true)->unique();
            $table->string('first_names');
            $table->string('last_names');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('gender');
            $table->string('relationship');
            $table->foreignId('official_id')->constrained('officials')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
