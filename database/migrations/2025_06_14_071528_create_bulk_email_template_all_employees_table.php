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
        Schema::create('bulk_email_template_all_employees', function (Blueprint $table) {
            $table->tinyInteger('bulk_email_template_all_employees_id', true);
            $table->string('bulk_email_template_all_employees_name', 255)->nullable();
            $table->string('bulk_email_template_all_employees_subject', 255)->nullable();
            $table->tinyInteger('bulk_email_template_all_employees_category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulk_email_template_all_employees');
    }
};
