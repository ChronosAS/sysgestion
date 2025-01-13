<?php

use App\Enum\ApplicationStatusEnum;
use App\Enum\RequestStatusEnum;
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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('applicant_id')->constrained('officials');
            $table->morphs('recipient');
            $table->string('status')->default(ApplicationStatusEnum::Pending->value);
            $table->date('application_date');
            $table->date('delivery_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
