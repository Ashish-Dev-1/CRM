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
        Schema::create('bulk_email_template_valuations', function (Blueprint $table) {
            $table->tinyInteger('bulk_email_template_valuations_id', true);
            $table->string('bulk_email_template_valuations_name', 255)->nullable();
            $table->string('bulk_email_template_valuations_subject', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulk_email_template_valuations');
    }
};
