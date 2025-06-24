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
        Schema::create('applicant_requirement_suburbs', function (Blueprint $table) {
            $table->integer('ars_id')->primary();
            $table->integer('ar_id')->nullable();
            $table->integer('ar_suburb_id')->nullable();
            // Foreign keys
            $table->foreign('ar_id', 'fk_applicant_requirement_suburb_ar_id')
                ->references('ar_id')->on('applicant_requirements')
                ->onUpdate('no action')->onDelete('no action');
            $table->foreign('ar_suburb_id', 'fk_applicant_requirement_suburb_ar_suburb_id')
                ->references('suburb_id')->on('suburb')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirement_suburbs');
    }
};
