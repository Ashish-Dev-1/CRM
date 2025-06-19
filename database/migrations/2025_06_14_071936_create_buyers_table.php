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
        Schema::create('buyers', function (Blueprint $table) {
            $table->integer('buyer_id', true);
            $table->string('buyer_token', 40)->nullable();
            $table->tinyInteger('buyer_type')->nullable();
            $table->tinyInteger('buyer_title')->nullable();
            $table->string('buyer_first_name', 30)->nullable();
            $table->string('buyer_surname', 30)->nullable();
            $table->string('buyer_trading_name', 255)->nullable();
            $table->string('buyer_company_name', 255)->nullable();
            $table->string('buyer_company_trading_name', 255)->nullable();
            $table->string('buyer_company_contact_name', 255)->nullable();
            $table->string('buyer_company_registration_number', 10)->nullable();
            $table->string('buyer_company_vat_registration_number', 20)->nullable();
            $table->string('buyer_company_reg_office_property_number_name', 50)->nullable();
            $table->string('buyer_company_reg_office_address_line_1', 255)->nullable();
            $table->string('buyer_company_reg_office_address_line_2', 255)->nullable();
            $table->string('buyer_company_reg_office_suburb', 255)->nullable();
            $table->string('buyer_company_reg_office_town_city', 255)->nullable();
            $table->string('buyer_company_reg_office_postcode', 8)->nullable();
            $table->integer('buyer_company_reg_office_country')->nullable();
            $table->string('buyer_phone_home', 255)->nullable();
            $table->string('buyer_phone_work', 255)->nullable();
            $table->string('buyer_phone_mobile', 255)->nullable();
            $table->string('buyer_fax', 20)->nullable();
            $table->string('buyer_email', 255)->nullable();
            $table->string('buyer_property_number_name', 50)->nullable();
            $table->string('buyer_apartment_number_name', 50)->nullable();
            $table->string('buyer_address_line_1', 255)->nullable();
            $table->string('buyer_address_line_2', 255)->nullable();
            $table->string('buyer_suburb', 255)->nullable();
            $table->string('buyer_town_city', 255)->nullable();
            $table->string('buyer_postcode', 8)->nullable();
            $table->integer('buyer_country')->nullable();
            $table->text('buyer_notes')->nullable();
            $table->tinyInteger('buyer_bank_name')->nullable();
            $table->string('buyer_bank_sort_code', 8)->nullable();
            $table->string('buyer_bank_account_number', 8)->nullable();
            $table->string('buyer_bank_account_name', 100)->nullable();
            $table->tinyInteger('buyer_online_account')->nullable();
            $table->string('buyer_online_login_username', 255)->nullable();
            $table->string('buyer_online_login_password', 255)->nullable();
            $table->string('buyer_online_account_password_reset_token', 40)->nullable();
            $table->date('buyer_dob')->nullable();
            $table->string('buyer_passport_number', 10)->nullable();
            $table->string('buyer_driving_licence_number', 20)->nullable();
            $table->string('buyer_nino', 10)->nullable();
            $table->dateTime('buyer_date_created')->nullable();
            $table->dateTime('buyer_date_updated')->nullable();
            $table->integer('buyer_created_by')->nullable();
            $table->integer('buyer_updated_by')->nullable();
            $table->integer('buyer_solicitor_company')->nullable();
            $table->integer('buyer_solicitor_company_individual')->nullable();
            $table->integer('buyer_estate_agent_company')->nullable();
            $table->integer('buyer_estate_agent_company_individual')->nullable();
            $table->integer('buyer_branch')->nullable();
            $table->tinyInteger('buyer_source')->nullable();
            // Foreign keys
            $table->foreign('buyer_bank_name', 'fk_buyer_buyer_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_branch', 'fk_buyer_buyer_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_created_by', 'fk_buyer_buyer_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_title', 'fk_buyer_buyer_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_updated_by', 'fk_buyer_buyer_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_type', 'fk_buyer_buyer_type')
                ->references('body_type_id')->on('body_type')
                ->onUpdate('no action')->onDelete('no action');
            $table->foreign('buyer_country', 'fk_buyer_buyer_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('buyer_company_reg_office_country', 'fk_buyer_buyer_company_reg_office_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
