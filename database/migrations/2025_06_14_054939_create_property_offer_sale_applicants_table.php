<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_offer_sale_applicants', function (Blueprint $table) {
            $table->integer('property_offer_sale_applicants_id')->primary();
            $table->integer('property_offer_sale_id')->nullable();
            $table->integer('applicant_id')->nullable();

            // Foreign keys
            // Foreign key constraint for property_offer_sale_id removed due to migration order issue
            $table->foreign('applicant_id', 'fk_property_offer_sale_applicants_applicant_id')
                ->references('applicant_id')->on('applicants')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_applicants');
    }
};
