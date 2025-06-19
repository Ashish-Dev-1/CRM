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
        Schema::create('applicant_requirement_properties', function (Blueprint $table) {
            $table->integer('arp_id')->primary();
            $table->integer('ar_id')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->dateTime('arp_date_created')->nullable();
            // Foreign keys
            $table->foreign('ar_id', 'fk_applicant_requirement_properties_ar_id')
                ->references('ar_id')->on('applicant_requirement')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_id', 'fk_applicant_requirement_properties_applicant_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_applicant_requirement_properties_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirement_properties');
    }
};
