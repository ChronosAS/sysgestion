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
        Schema::create('citizens', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->bigInteger('document',false,true)->unique()->nullable();
            $table->string('first_names');
            $table->string('last_names');
            $table->string('civil_status');
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number');
            $table->string('phone_number_2')->nullable();
            $table->string('address',500);
            $table->integer('estado_id');
            $table->integer('municipio_id');
            $table->integer('parroquia_id');
            $table->string('observations',500)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizens');
    }
};
