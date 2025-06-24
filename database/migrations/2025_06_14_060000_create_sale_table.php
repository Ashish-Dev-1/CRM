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
        Schema::create('sale', function (Blueprint $table) {
            $table->integer('sale_id')->primary();
            $table->integer('sale_offer_id')->nullable();
            $table->unsignedInteger('sale_property')->nullable();
            $table->date('sale_agreed_date')->nullable();
            $table->decimal('sale_agreed_price', 10, 2)->nullable();
            $table->integer('sale_purchase_finance')->nullable();
            $table->text('sale_notes')->nullable();
            $table->integer('sale_vendor_solicitor_company_intermediary')->nullable();
            $table->integer('sale_vendor_solicitor_company')->nullable();
            $table->integer('sale_vendor_solicitor_company_individual')->nullable();
            $table->integer('sale_vendor_mortgage_advisor')->nullable();
            $table->integer('sale_vendor_mortgage_advisor_individual')->nullable();
            $table->integer('sale_buyer_solicitor_company_intermediary')->nullable();
            $table->integer('sale_buyer_solicitor_company')->nullable();
            $table->integer('sale_buyer_solicitor_company_individual')->nullable();
            $table->integer('sale_buyer_mortgage_advisor')->nullable();
            $table->integer('sale_buyer_mortgage_advisor_individual')->nullable();
            $table->tinyInteger('sale_status')->nullable();
            $table->date('sale_target_exchange_date')->nullable();
            $table->date('sale_target_completion_date')->nullable();
            $table->text('sale_collapsed_reason')->nullable();
            $table->tinyInteger('sale_collapsed_reason_id')->nullable();
            $table->tinyInteger('sale_viewings_status')->default(1);
            $table->integer('sale_employee_responsible')->nullable();
            $table->date('sale_next_review_date')->nullable();
            $table->text('sale_next_review_notes')->nullable();
            $table->boolean('sale_media_utilities')->default(1);
            $table->decimal('sale_commission_completion_payment', 6, 2)->nullable();
            $table->integer('sale_commission_completion_payment_type')->nullable();
            $table->date('sale_commission_completion_date_paid')->nullable();
            $table->date('sale_completion_date')->nullable();
            $table->tinyInteger('sale_invoice_check_override')->default(2);
            $table->tinyInteger('sale_auto_progression_chase_vendor')->default(1);
            $table->tinyInteger('sale_auto_progression_chase_buyer')->default(1);
            $table->dateTime('sale_last_update')->nullable();
            $table->integer('sale_created_by')->nullable();
            $table->integer('sale_updated_by')->nullable();
            $table->dateTime('sale_date_created')->nullable();
            $table->dateTime('sale_date_updated')->nullable();

            $table->foreign('sale_created_by', 'fk_sale_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_employee_responsible', 'fk_sale_employee_responsible')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_property', 'fk_sale_sale_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_updated_by', 'fk_sale_sale_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_offer_id', 'fk_sale_sale_offer_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_purchase_finance', 'fk_sale_sale_purchase_finance')
                ->references('sale_finance_id')->on('sale_finance')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_vendor_solicitor_company_intermediary', 'fk_sale_vendor_solicitor_company_intermediary')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_vendor_solicitor_company', 'fk_sale_vendor_solicitor_company')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_vendor_mortgage_advisor', 'fk_sale_vendor_mortgage_advisor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_buyer_solicitor_company_intermediary', 'fk_sale_buyer_solicitor_company_intermediary')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_buyer_solicitor_company', 'fk_sale_buyer_solicitor_company')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_buyer_mortgage_advisor', 'fk_sale_buyer_mortgage_advisor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_vendor_solicitor_company_individual', 'fk_sale_vendor_solicitor_company_individual')
                ->references('directory_individual_id')->on('directory_individual')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_vendor_mortgage_advisor_individual', 'fk_sale_vendor_mortgage_advisor_individual')
                ->references('directory_individual_id')->on('directory_individual')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_buyer_solicitor_company_individual', 'fk_sale_buyer_solicitor_company_individual')
                ->references('directory_individual_id')->on('directory_individual')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_buyer_mortgage_advisor_individual', 'fk_sale_buyer_mortgage_advisor_individual')
                ->references('directory_individual_id')->on('directory_individual')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_status', 'fk_sale_sale_status')
                ->references('sale_status_id')->on('sale_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_collapsed_reason_id', 'fk_sale_sale_collapsed_reason_id')
                ->references('sale_collapsed_reason_id')->on('sale_collapsed_reason')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_commission_completion_payment_type', 'fk_sale_sale_commission_completion_payment_type')
                ->references('commission_type_id')->on('commission_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale');
    }
};
