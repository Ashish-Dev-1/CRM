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
        Schema::create('tenant', function (Blueprint $table) {
            $table->id('tenant_id');
            $table->string('tenant_token', 40)->nullable();
            $table->tinyInteger('tenant_type')->nullable();
            $table->tinyInteger('tenant_title')->nullable();
            $table->string('tenant_first_name', 30)->nullable();
            $table->string('tenant_surname', 30)->nullable();
            $table->string('tenant_company_name')->nullable();
            $table->string('tenant_company_trading_name')->nullable();
            $table->string('tenant_company_contact_name')->nullable();
            $table->string('tenant_company_registration_number', 10)->nullable();
            $table->string('tenant_company_vat_registration_number', 20)->nullable();
            $table->string('tenant_phone_home')->nullable();
            $table->string('tenant_phone_work')->nullable();
            $table->string('tenant_phone_mobile')->nullable();
            $table->string('tenant_fax', 20)->nullable();
            $table->string('tenant_email')->nullable();
            $table->string('tenant_email_accounts')->nullable();
            $table->string('tenant_email_works')->nullable();
            $table->string('tenant_property_number_name', 50)->nullable();
            $table->string('tenant_apartment_number_name', 50)->nullable();
            $table->string('tenant_address_line_1')->nullable();
            $table->string('tenant_address_line_2')->nullable();
            $table->string('tenant_suburb')->nullable();
            $table->string('tenant_town_city')->nullable();
            $table->string('tenant_postcode', 8)->nullable();
            $table->integer('tenant_country')->nullable();
            $table->string('tenant_forwarding_property_number_name', 50)->nullable();
            $table->string('tenant_forwarding_apartment_number_name', 50)->nullable();
            $table->string('tenant_forwarding_address_line_1')->nullable();
            $table->string('tenant_forwarding_address_line_2')->nullable();
            $table->string('tenant_forwarding_suburb')->nullable();
            $table->string('tenant_forwarding_town_city')->nullable();
            $table->string('tenant_forwarding_postcode', 8)->nullable();
            $table->integer('tenant_forwarding_country')->nullable();
            $table->date('tenant_dob')->nullable();
            $table->string('tenant_passport_number', 10)->nullable();
            $table->text('tenant_notes')->nullable();
            $table->tinyInteger('tenant_bank_name')->nullable();
            $table->string('tenant_bank_sort_code', 8)->nullable();
            $table->string('tenant_bank_account_number', 8)->nullable();
            $table->string('tenant_bank_account_name', 100)->nullable();
            $table->dateTime('tenant_date_created')->nullable();
            $table->dateTime('tenant_date_updated')->nullable();
            $table->integer('tenant_created_by')->nullable();
            $table->integer('tenant_updated_by')->nullable();
            $table->tinyInteger('tenant_online_account')->nullable();
            $table->string('tenant_online_login_username')->nullable();
            $table->string('tenant_online_login_password')->nullable();
            $table->string('tenant_online_account_password_reset_token', 40)->nullable();
            $table->string('tenant_nino', 13)->nullable();
            $table->tinyInteger('tenant_employment_status')->nullable();
            $table->string('tenant_employer_name')->nullable();
            $table->decimal('tenant_income', 9, 2)->nullable();
            $table->tinyInteger('tenant_income_frequency')->nullable();
            $table->string('tenant_driving_licence_number', 20)->nullable();
            $table->text('tenant_employment_income_notes')->nullable();
            $table->integer('tenant_referencing_provider')->nullable();
            $table->string('tenant_referencing_provider_reference', 20)->nullable();
            $table->integer('tenant_branch')->nullable();
            $table->date('tenant_right_to_rent_review_date')->nullable();

            $table->foreign('tenant_bank_name', 'fk_tenant_tenant_bank_name')
                ->references('bank_id')->on('banks')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_branch', 'fk_tenant_tenant_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_created_by', 'fk_tenant_tenant_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_title', 'fk_tenant_tenant_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_updated_by', 'fk_tenant_tenant_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_type', 'fk_tenant_tenant_type')
                ->references('body_type_id')->on('body_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_country', 'fk_tenant_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_forwarding_country', 'fk_tenant_forwarding_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_employment_status', 'fk_tenant_tenant_employment_status')
                ->references('employment_status_id')->on('employment_status');
            $table->foreign('tenant_income_frequency', 'fk_tenant_tenant_income_frequency')
                ->references('income_frequency_id')->on('income_frequency');
            $table->foreign('tenant_referencing_provider', 'fk_tenant_tenant_referencing_provider')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant');
    }
};
