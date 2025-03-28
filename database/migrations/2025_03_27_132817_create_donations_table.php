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
        Schema::create('donations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code')->unique()->nullable();
            $table->bigInteger('donor_document',false,true)->nullable();
            $table->string('donor_name')->nullable();
            $table->string('donor_email')->nullable();
            $table->string('donor_phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('donor_address')->nullable();
            $table->string('donor_civil_status')->nullable();
            $table->date('dob')->nullable();
            $table->integer('estado_id')->nullable();
            $table->integer('municipio_id')->nullable();
            $table->integer('parroquia_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
