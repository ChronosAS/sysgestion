<?php

use App\Enum\GenderEnum;
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
        Schema::create('officials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('document',false,true)->unique();
            $table->string('first_names');
            $table->string('last_names');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address');
            $table->string('gender');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officials');
    }
};
