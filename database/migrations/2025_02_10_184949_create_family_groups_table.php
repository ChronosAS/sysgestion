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
        Schema::create('family_groups', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->foreignUuid('citizen_uuid')->constrained('citizens')->cascadeOnDelete();
            $table->string('first_names');
            $table->string('last_names');
            $table->string('relation');
            $table->bigInteger('document',false,true)->nullable();
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_groups');
    }
};
