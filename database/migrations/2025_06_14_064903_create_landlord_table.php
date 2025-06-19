<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('landlord', function (Blueprint $table) {
            $table->increments('landlord_id');
            $table->string('landlord_token', 40)->nullable();
            $table->tinyInteger('landlord_type')->nullable();
            $table->tinyInteger('landlord_title')->nullable();
            $table->string('landlord_first_name', 30)->nullable()->charset('latin1');
            $table->string('landlord_surname', 30)->nullable()->charset('latin1');
            $table->string('landlord_trading_name', 255)->nullable();
            $table->string('landlord_company_name', 255)->nullable()->charset('latin1');
            $table->string('landlord_company_trading_name', 255)->nullable();
            $table->string('landlord_company_contact_name', 255)->nullable();
            $table->string('landlord_company_registration_number', 10)->nullable();
            $table->string('landlord_company_vat_registration_number', 20)->nullable();
            $table->string('landlord_company_reg_office_property_number_name', 50)->nullable();
            $table->string('landlord_company_reg_office_address_line_1', 255)->nullable();
            $table->string('landlord_company_reg_office_address_line_2', 255)->nullable();
            $table->string('landlord_company_reg_office_suburb', 255)->nullable();
            $table->string('landlord_company_reg_office_town_city', 255)->nullable();
            $table->string('landlord_company_reg_office_postcode', 8)->nullable();
            $table->integer('landlord_company_reg_office_country')->nullable();
            $table->string('landlord_phone_home', 255)->nullable();
            $table->string('landlord_phone_work', 255)->nullable();
            $table->string('landlord_phone_mobile', 255)->nullable();
            $table->string('landlord_fax', 255)->nullable()->charset('latin1');
            $table->string('landlord_email', 255)->nullable()->charset('latin1');
            $table->string('landlord_email_accounts', 255)->nullable();
            $table->string('landlord_email_works', 255)->nullable();
            $table->string('landlord_property_number_name', 50)->nullable()->charset('latin1');
            $table->string('landlord_apartment_number_name', 50)->nullable()->charset('latin1');
            $table->string('landlord_address_line_1', 255)->nullable()->charset('latin1');
            $table->string('landlord_address_line_2', 255)->nullable()->charset('latin1');
            $table->string('landlord_suburb', 255)->nullable();
            $table->string('landlord_town_city', 255)->nullable();
            $table->string('landlord_postcode', 8)->nullable()->charset('latin1');
            $table->integer('landlord_country')->nullable();
            $table->tinyInteger('landlord_bank_name')->nullable();
            $table->string('landlord_bank_sort_code', 8)->nullable()->charset('latin1');
            $table->string('landlord_bank_account_number', 8)->nullable()->charset('latin1');
            $table->string('landlord_bank_account_name', 100)->nullable()->charset('latin1');
            $table->string('landlord_bank_iban', 50)->nullable();
            $table->string('landlord_bank_bic_swift', 11)->nullable();
            $table->integer('landlord_nrl_status')->nullable();
            $table->decimal('landlord_nrl_tax_rate', 4, 2)->nullable();
            $table->string('landlord_nrl_reference', 15)->nullable()->charset('latin1');
            $table->date('landlord_nrl_date')->nullable();
            $table->integer('landlord_status')->nullable();
            $table->integer('landlord_lead_source')->nullable();
            $table->text('landlord_notes')->nullable()->charset('latin1');
            $table->tinyInteger('landlord_online_account')->nullable();
            $table->string('landlord_online_login_username', 255)->nullable();
            $table->string('landlord_online_login_password', 255)->nullable();
            $table->string('landlord_online_account_password_reset_token', 40)->nullable();
            $table->tinyInteger('landlord_lha')->nullable();
            $table->tinyInteger('landlord_pets')->nullable();
            $table->tinyInteger('landlord_smoking')->nullable();
            $table->tinyInteger('landlord_sharers')->nullable();
            $table->integer('landlord_contractors_use')->nullable();
            $table->decimal('landlord_tenant_find_fee', 7, 2)->nullable();
            $table->tinyInteger('landlord_tenant_find_fee_type')->nullable();
            $table->decimal('landlord_tenant_find_with_management_fee', 7, 2)->nullable();
            $table->tinyInteger('landlord_tenant_find_with_management_fee_type')->nullable();
            $table->decimal('landlord_management_fee', 7, 2)->nullable();
            $table->tinyInteger('landlord_management_fee_type')->nullable();
            $table->date('landlord_dob')->nullable();
            $table->string('landlord_passport_number', 10)->nullable()->charset('latin1');
            $table->string('landlord_driving_licence_number', 20)->nullable();
            $table->string('landlord_nino', 13)->nullable();
            $table->integer('landlord_branch')->nullable();
            $table->integer('landlord_solicitor_company')->nullable();
            $table->tinyInteger('landlord_mailing_list')->nullable();
            $table->integer('landlord_solicitor_company_individual')->nullable();
            $table->text('landlord_works_notes')->nullable();
            $table->text('landlord_fees_notes')->nullable();
            $table->tinyInteger('landlord_emails_new_invoice_credit')->default(1);
            $table->tinyInteger('landlord_emails_new_property_inspection')->default(1);
            $table->tinyInteger('landlord_emails_new_invoice')->default(1);
            $table->tinyInteger('landlord_emails_new_landlord_payment')->default(1);
            $table->tinyInteger('landlord_emails_edit_works')->default(1);
            $table->tinyInteger('landlord_emails_tenant_charge_chase')->default(1);
            $table->tinyInteger('landlord_emails_new_application')->default(1);
            $table->tinyInteger('landlord_emails_edit_application')->default(1);
            $table->tinyInteger('landlord_emails_new_viewing')->default(1);
            $table->tinyInteger('landlord_emails_edit_viewing')->default(1);
            $table->tinyInteger('landlord_emails_new_certificate_renewal')->default(1);
            $table->tinyInteger('landlord_emails_certificate_take_on_chase')->default(1);
            $table->tinyInteger('landlord_emails_selective_licence_chase')->default(1);
            $table->boolean('landlord_emails_outstanding_invoice_balance_exceed_income')->default(2);
            $table->tinyInteger('landlord_bacs_file')->default(1);
            $table->boolean('landlord_suspend_payments')->default(2);
            $table->tinyInteger('landlord_capacity')->nullable();
            $table->tinyInteger('landlord_deceased')->default(2);
            $table->tinyInteger('landlord_discount_group')->nullable()->default(1);
            $table->dateTime('landlord_date_created')->nullable();
            $table->dateTime('landlord_date_updated')->nullable();
            $table->integer('landlord_created_by')->nullable();
            $table->integer('landlord_updated_by')->nullable();
            // Foreign keys
            $table->foreign('landlord_bank_name', 'fk_landlord_landlord_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_branch', 'fk_landlord_landlord_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_company_reg_office_country', 'fk_landlord_landlord_cmp_reg_office_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_country', 'fk_landlord_landlord_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_created_by', 'fk_landlord_landlord_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_title', 'fk_landlord_landlord_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_updated_by', 'fk_landlord_landlord_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_type', 'fk_landlord_landlord_type')
                ->references('body_type_id')->on('body_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_nrl_status', 'fk_landlord_landlord_nrl_status')
                ->references('landlord_nrl_status_id')->on('landlord_nrl_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_status', 'fk_landlord_landlord_status')
                ->references('landlord_status_id')->on('landlord_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_capacity', 'fk_landlord_landlord_capacity')
                ->references('capacity_id')->on('capacity')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_discount_group', 'fk_landlord_landlord_discount_group')
                ->references('discount_group_id')->on('discount_group')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlord');
    }
};
