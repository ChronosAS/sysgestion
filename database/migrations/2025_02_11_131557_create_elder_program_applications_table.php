<?php

use App\Enum\ApplicationStatusEnum;
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
        Schema::create('elder_program_applications', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('code')->unique()->nullable();
            $table->foreignUuid('elder_id')->constrained('citizens');
            $table->string('ocuppation');
            $table->string('education_level');
            $table->string('status')->default(ApplicationStatusEnum::Pending);
            $table->string('medical_aspect',250);
            $table->string('city_of_birth');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elder_program_applications');
    }
};
