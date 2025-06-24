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
        Schema::create('applicant_requirement_property_subtypes', function (Blueprint $table) {
            $table->integer('arps_id')->primary();
            $table->integer('ar_id')->nullable();
            $table->integer('ar_property_type_id')->nullable();
             // Foreign keys
            $table->foreign('ar_property_type_id', 'fk_applicant_requirement_property_subtype')
                ->references('property_type_id')->on('property_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_id', 'fk_applicant_requirement_property_subtype_')
                ->references('ar_id')->on('applicant_requirements')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirement_property_subtypes');
    }
};
