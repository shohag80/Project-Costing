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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->restrictOnDelete();
            $table->string('description')->comment('to_work');
            $table->string('designation');
            $table->string('man_days')->comment('22_days_a_month');
            $table->double('total')->comment('months');
            $table->double('salary')->comment('monthly_prof');
            $table->double('sub_total');
            $table->double('total_amount')->comment('BDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_details');
    }
};
