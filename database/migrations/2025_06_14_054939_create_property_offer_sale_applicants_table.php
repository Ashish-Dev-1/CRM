<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_offer_sale_applicants', function (Blueprint $table) {
            $table->integer('property_offer_sale_applicants_id')->primary();
            $table->integer('property_offer_sale_id')->nullable();
            $table->integer('applicant_id')->nullable();

            // Foreign keys
            $table->foreign('property_offer_sale_id', 'fk_property_offer_sale_applicants_property_offer_sale_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('applicant_id', 'fk_property_offer_sale_applicants_applicant_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_applicants');
    }
};
