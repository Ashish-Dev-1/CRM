<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTable extends Migration
{
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->integer('applicant_id')->primary();
            $table->string('applicant_token', 40)->nullable();
            $table->tinyInteger('applicant_type')->default(1);
            $table->tinyInteger('applicant_sub_type')->nullable();
            $table->tinyInteger('applicant_title')->nullable();
            $table->string('applicant_first_name', 255)->nullable();
            $table->string('applicant_surname', 255)->nullable();
            $table->string('applicant_company_name', 255)->nullable();
            $table->string('applicant_company_trading_name', 255)->nullable();
            $table->string('applicant_email', 255)->nullable();
            $table->string('applicant_phone_home', 255)->nullable();
            $table->string('applicant_phone_work', 255)->nullable();
            $table->string('applicant_phone_mobile', 255)->nullable();
            $table->string('applicant_fax', 255)->nullable();
            $table->string('applicant_property_number_name', 255)->nullable();
            $table->string('applicant_apartment_number_name', 255)->nullable();
            $table->string('applicant_address_line_1', 255)->nullable();
            $table->string('applicant_address_line_2', 255)->nullable();
            $table->string('applicant_suburb', 255)->nullable();
            $table->string('applicant_town_city', 255)->nullable();
            $table->string('applicant_postcode', 8)->nullable();
            $table->integer('applicant_country')->nullable();
            $table->integer('applicant_branch')->nullable();
            $table->tinyInteger('applicant_purchase_finance')->nullable();
            $table->tinyInteger('applicant_purchase_type')->nullable();
            $table->tinyInteger('applicant_purchase_chain')->nullable();
            $table->tinyInteger('applicant_purchase_chain_status')->default(4);
            $table->text('applicant_purchase_chain_notes')->nullable();
            $table->tinyInteger('applicant_ftb')->nullable();
            $table->tinyInteger('applicant_referral_solicitor')->nullable();
            $table->text('applicant_referral_solicitor_notes')->nullable();
            $table->tinyInteger('applicant_referral_mortgage')->nullable();
            $table->text('applicant_referral_mortgage_notes')->nullable();
            $table->integer('applicant_referral_valuation')->nullable();
            $table->text('applicant_referral_valuation_notes')->nullable();
            $table->decimal('applicant_cash_available', 11, 2)->nullable();
            $table->decimal('applicant_mortgage_available', 11, 2)->nullable();
            $table->date('applicant_pof_date_updated')->nullable();
            $table->tinyInteger('applicant_source')->nullable();
            $table->tinyInteger('applicant_lead_source')->nullable();
            $table->text('applicant_lead_source_notes')->nullable();
            $table->tinyInteger('applicant_referral_valuation_closed')->default(2);
            $table->date('applicant_referral_valuation_next_review_date')->default('0000-00-00');
            $table->text('applicant_referral_valuation_next_review_notes')->nullable();
            $table->tinyInteger('applicant_referral_mortgage_closed')->default(2);
            $table->date('applicant_referral_mortgage_next_review_date')->default('0000-00-00');
            $table->text('applicant_referral_mortgage_next_review_notes')->nullable();
            $table->string('applicant_rightmove_email_id', 15)->nullable();
            $table->integer('applicant_negotiator')->nullable();
            $table->dateTime('applicant_date_created')->nullable();
            $table->dateTime('applicant_date_updated')->nullable();
            $table->integer('applicant_created_by')->nullable();
            $table->integer('applicant_updated_by')->nullable();

            // Foreign keys
            $table->foreign('applicant_branch', 'fk_applicant_applicant_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_created_by', 'fk_applicant_applicant_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_referral_valuation', 'fk_applicant_applicant_referral_valuation')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_sub_type', 'fk_applicant_applicant_sub_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_title', 'fk_applicant_applicant_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_type', 'fk_applicant_applicant_type')
                ->references('body_type_id')->on('body_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_updated_by', 'fk_applicant_applicant_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_purchase_finance', 'fk_applicant_applicant_purchase_finance')
                ->references('sale_finance_id')->on('sale_finance')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_purchase_type', 'fk_applicant_applicant_purchase_type')
                ->references('property_offer_sale_type_id')->on('property_offer_sale_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_lead_source', 'fk_applicant_applicant_lead_source')
                ->references('applicant_lead_source_id')->on('applicant_lead_source')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_negotiator', 'fk_applicant_applicant_negotiator')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
}