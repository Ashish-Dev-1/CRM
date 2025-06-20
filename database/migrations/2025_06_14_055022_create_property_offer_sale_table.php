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
        Schema::create('property_offer_sale', function (Blueprint $table) {
            $table->integer('property_offer_sale_id')->primary();
            $table->integer('property_offer_sale_property')->nullable();
            $table->decimal('property_offer_sale_price', 10, 2)->nullable();
            $table->tinyInteger('property_offer_sale_finance')->nullable();
            $table->tinyInteger('property_offer_sale_mortgage_deposit', false, true)->nullable();
            $table->tinyInteger('property_offer_sale_type')->nullable();
            $table->tinyInteger('property_offer_sale_survey')->nullable();
            $table->tinyInteger('property_offer_sale_htb')->nullable();
            $table->tinyInteger('property_offer_sale_htb_approved')->nullable();
            $table->tinyInteger('property_offer_sale_chain')->nullable();
            $table->integer('property_offer_sale_status')->nullable();
            $table->text('property_offer_sale_status_reason')->nullable();
            $table->text('property_offer_sale_notes')->nullable();
            $table->text('property_offer_sale_notes_private')->nullable();
            $table->integer('property_offer_sale_employee')->nullable();
            $table->tinyInteger('property_offer_sale_referral_solicitor')->nullable();
            $table->text('property_offer_sale_referral_solicitor_notes')->nullable();
            $table->tinyInteger('property_offer_sale_referral_surveyor')->nullable();
            $table->text('property_offer_sale_referral_surveyor_notes')->nullable();
            $table->tinyInteger('property_offer_sale_referral_mortgage')->nullable();
            $table->text('property_offer_sale_referral_mortgage_notes')->nullable();
            $table->tinyInteger('property_offer_sale_referral_valuation')->nullable();
            $table->text('property_offer_sale_referral_valuation_notes')->nullable();
            $table->tinyInteger('property_offer_sale_viewings')->nullable();
            $table->integer('property_offer_sale_revised_offer_id')->nullable();
            $table->dateTime('property_offer_sale_date_created')->nullable();
            $table->dateTime('property_offer_sale_date_updated')->nullable();
            $table->integer('property_offer_sale_created_by')->nullable();
            $table->integer('property_offer_sale_updated_by')->nullable();

            // Foreign keys
            $table->foreign('property_offer_sale_created_by', 'fk_property_offer_sale_property_offer_sale_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_employee', 'fk_property_offer_sale_property_offer_sale_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_property', 'fk_property_offer_sale_property_offer_sale_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_updated_by', 'fk_property_offer_sale_property_offer_sale_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_finance', 'fk_property_offer_sale_property_offer_sale_finance')
                ->references('sale_finance_id')->on('sale_finance')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_type', 'fk_property_offer_sale_property_offer_sale_type')
                ->references('property_offer_sale_type_id')->on('property_offer_sale_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_survey', 'fk_property_offer_sale_property_offer_sale_survey')
                ->references('survey_status_id')->on('survey_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_status', 'fk_property_offer_sale_property_offer_sale_status')
                ->references('property_offer_status_id')->on('property_offer_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_revised_offer_id', 'fk_property_offer_sale_property_offer_sale_revised_offer_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale');
    }
};
