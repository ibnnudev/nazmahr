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
        Schema::create('company_configuration_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->longText('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('regular_salary')->nullable()->default(0); // 1 day
            $table->integer('tolerance_late_time_in_minutes')->nullable()->default(0); // 30 minutes
            $table->integer('amount_per_day')->nullable()->default(0); // 1 day
            $table->integer('amount_per_task')->nullable()->default(0); // 1 task
            $table->integer('amount_per_reimbursement')->nullable()->default(0); // 1 item
            $table->integer('amount_per_overtime')->nullable()->default(0); // 1 hour
            $table->integer('amount_per_leave')->nullable()->default(0); // 1 day
            $table->integer('amount_per_absence')->nullable()->default(0); // 1 day
            $table->integer('amount_per_late')->nullable()->default(0); // 30 minutes late
            $table->integer('amount_per_early_leave')->nullable()->default(0); // 30 minutes early leave
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_configuration_settings');
    }
};
