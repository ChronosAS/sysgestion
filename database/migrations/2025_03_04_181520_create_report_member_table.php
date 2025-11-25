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
        Schema::create('report_member', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('pension_report_id')->constrained('pension_reports');
            $table->foreignUuid('elder_program_member_id')->constrained('elder_program_members');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pension_report_elder_program_member');
    }
};
