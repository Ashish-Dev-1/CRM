<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->id('vendor_id');
            $table->string('vendor_token', 40)->nullable();
            $table->tinyInteger('vendor_type')->nullable();
            $table->tinyInteger('vendor_title')->nullable();
            $table->string('vendor_first_name', 30)->nullable();
            $table->string('vendor_surname', 30)->nullable();
            $table->string('vendor_trading_name', 255)->nullable();
            $table->string('vendor_company_name', 255)->nullable();
            $table->string('vendor_company_trading_name', 255)->nullable();
            $table->string('vendor_company_contact_name', 255)->nullable();
            $table->string('vendor_company_registration_number', 10)->nullable();
            $table->string('vendor_company_vat_registration_number', 20)->nullable();
            $table->string('vendor_company_reg_office_property_number_name', 50)->nullable();
            $table->string('vendor_company_reg_office_address_line_1', 255)->nullable();
            $table->string('vendor_company_reg_office_address_line_2', 255)->nullable();
            $table->string('vendor_company_reg_office_suburb', 255)->nullable();
            $table->string('vendor_company_reg_office_town_city', 255)->nullable();
            $table->string('vendor_company_reg_office_postcode', 8)->nullable();
            $table->unsignedInteger('vendor_company_reg_office_country')->nullable();
            $table->string('vendor_phone_home', 255)->nullable();
            $table->string('vendor_phone_work', 255)->nullable();
            $table->string('vendor_phone_mobile', 255)->nullable();
            $table->string('vendor_fax', 255)->nullable();
            $table->string('vendor_email', 255)->nullable();
            $table->string('vendor_property_number_name', 50)->nullable();
            $table->string('vendor_apartment_number_name', 50)->nullable();
            $table->string('vendor_address_line_1', 255)->nullable();
            $table->string('vendor_address_line_2', 255)->nullable();
            $table->string('vendor_suburb', 255)->nullable();
            $table->string('vendor_town_city', 255)->nullable();
            $table->string('vendor_postcode', 8)->nullable();
            $table->unsignedInteger('vendor_country')->nullable();
            $table->tinyInteger('vendor_bank_name')->nullable();
            $table->string('vendor_bank_sort_code', 8)->nullable();
            $table->string('vendor_bank_account_number', 8)->nullable();
            $table->string('vendor_bank_account_name', 100)->nullable();
            $table->unsignedInteger('vendor_status')->nullable();
            $table->unsignedInteger('vendor_lead_source')->nullable();
            $table->text('vendor_notes')->nullable();
            $table->tinyInteger('vendor_online_account')->nullable();
            $table->string('vendor_online_login_username', 255)->nullable();
            $table->string('vendor_online_login_password', 255)->nullable();
            $table->string('vendor_online_account_password_reset_token', 40)->nullable();
            $table->date('vendor_dob')->nullable();
            $table->string('vendor_passport_number', 10)->nullable();
            $table->string('vendor_driving_licence_number', 20)->nullable();
            $table->string('vendor_nino', 10)->nullable();
            $table->decimal('vendor_sole_sale_fee', 7, 2)->nullable();
            $table->tinyInteger('vendor_sole_sale_fee_type')->nullable();
            $table->decimal('vendor_multi_sale_fee', 7, 2)->nullable();
            $table->tinyInteger('vendor_multi_sale_fee_type')->nullable();
            $table->dateTime('vendor_date_created')->nullable();
            $table->dateTime('vendor_date_updated')->nullable();
            $table->unsignedInteger('vendor_created_by')->nullable();
            $table->unsignedInteger('vendor_updated_by')->nullable();
            $table->unsignedInteger('vendor_solicitor_company')->nullable();
            $table->unsignedInteger('vendor_solicitor_company_individual')->nullable();
            $table->unsignedInteger('vendor_branch')->nullable();
            $table->tinyInteger('vendor_mailing_list')->nullable();
            $table->text('vendor_fees_notes')->nullable();
            $table->tinyInteger('vendor_capacity')->nullable();
            $table->tinyInteger('vendor_deceased')->default(2);
            $table->tinyInteger('vendor_emails_new_viewing')->default(1);
            $table->tinyInteger('vendor_emails_edit_viewing')->default(1);
            $table->tinyInteger('vendor_emails_feedback')->default(1);
            $table->tinyInteger('vendor_emails_property_performance_review')->default(1);
            $table->tinyInteger('vendor_emails_new_offer')->default(1);
            $table->tinyInteger('vendor_emails_edit_offer')->default(1);

            $table->foreign('vendor_bank_name', 'fk_vendor_vendor_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_branch', 'fk_vendor_vendor_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_company_reg_office_country', 'fk_vendor_vendor_company_reg_office_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_country', 'fk_vendor_vendor_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_created_by', 'fk_vendor_vendor_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_title', 'fk_vendor_vendor_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_updated_by', 'fk_vendor_vendor_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_type', 'fk_vendor_vendor_type')
                ->references('body_type_id')->on('body_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_status', 'fk_vendor_vendor_status')
                ->references('vendor_status_id')->on('vendor_status')
                ->onUpdate('no action')->onDelete('no action');
            $table->foreign('vendor_sole_sale_fee_type', 'fk_vendor_sole_sale_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_multi_sale_fee_type', 'fk_vendor_multi_sale_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_solicitor_company', 'fk_vendor_vendor_solicitor_company')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_solicitor_company_individual', 'fk_vendor_vendor_solicitor_company_individual')
                ->references('directory_individual_id')->on('directory_individual')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vendor_capacity', 'fk_vendor_vendor_capacity')
                ->references('capacity_id')->on('capacity')
                ->onUpdate('no action')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
