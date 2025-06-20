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
        Schema::create('applications', function (Blueprint $table) {
            $table->integer('application_id')->primary();
            $table->string('application_token', 40)->nullable();
            $table->integer('application_property')->nullable();
            $table->integer('application_property_room')->nullable();
            $table->date('application_move_in_date')->nullable();
            $table->tinyInteger('application_length_of_stay')->nullable();
            $table->smallInteger('application_tenancy_length')->nullable();
            $table->text('application_children')->nullable();
            $table->text('application_pets')->nullable();
            $table->text('application_moving_reason')->nullable();
            $table->text('application_notes')->nullable();
            $table->tinyInteger('application_bank_name')->nullable();
            $table->string('application_bank_account_name', 255)->nullable();
            $table->string('application_bank_sort_code', 8)->nullable();
            $table->string('application_bank_account_number', 8)->nullable();
            $table->tinyInteger('application_status')->default(1);
            $table->text('application_status_reason')->nullable();
            $table->integer('application_employee')->nullable();
            $table->tinyInteger('application_type')->nullable();
            $table->smallInteger('application_company_years_trading')->nullable();
            $table->string('application_company_nature', 255)->nullable();
            $table->text('application_business_address_history')->nullable();
            $table->string('application_accountant_company_name', 255)->nullable();
            $table->tinyInteger('application_accountant_title')->nullable();
            $table->string('application_accountant_first_name', 255)->nullable();
            $table->string('application_accountant_surname', 255)->nullable();
            $table->string('application_accountant_telephone_numbers', 255)->nullable();
            $table->string('application_accountant_email_address', 255)->nullable();
            $table->string('application_accountant_address_line_1', 255)->nullable();
            $table->string('application_accountant_address_line_2', 255)->nullable();
            $table->string('application_accountant_town_city', 255)->nullable();
            $table->string('application_accountant_post_code', 8)->nullable();
            $table->string('application_solicitor_company_name', 255)->nullable();
            $table->tinyInteger('application_solicitor_title')->nullable();
            $table->string('application_solicitor_first_name', 255)->nullable();
            $table->string('application_solicitor_surname', 255)->nullable();
            $table->string('application_solicitor_telephone_numbers', 255)->nullable();
            $table->string('application_solicitor_email_address', 255)->nullable();
            $table->string('application_solicitor_address_line_1', 255)->nullable();
            $table->string('application_solicitor_address_line_2', 255)->nullable();
            $table->string('application_solicitor_town_city', 255)->nullable();
            $table->string('application_solicitor_post_code', 8)->nullable();
            $table->string('application_trade2_company_name', 255)->nullable();
            $table->tinyInteger('application_trade2_title')->nullable();
            $table->string('application_trade2_first_name', 255)->nullable();
            $table->string('application_trade2_surname', 255)->nullable();
            $table->string('application_trade2_telephone_numbers', 255)->nullable();
            $table->string('application_trade2_email_address', 255)->nullable();
            $table->string('application_trade2_address_line_1', 255)->nullable();
            $table->string('application_trade2_address_line_2', 255)->nullable();
            $table->string('application_trade2_town_city', 255)->nullable();
            $table->string('application_trade2_post_code', 8)->nullable();
            $table->string('application_trade_company_name', 255)->nullable();
            $table->tinyInteger('application_trade_title')->nullable();
            $table->string('application_trade_first_name', 255)->nullable();
            $table->string('application_trade_surname', 255)->nullable();
            $table->string('application_trade_telephone_numbers', 255)->nullable();
            $table->string('application_trade_email_address', 255)->nullable();
            $table->string('application_trade_address_line_1', 255)->nullable();
            $table->string('application_trade_address_line_2', 255)->nullable();
            $table->string('application_trade_town_city', 255)->nullable();
            $table->string('application_trade_post_code', 8)->nullable();
            $table->tinyInteger('application_body_type')->nullable();
            $table->integer('application_landlord_solicitor_company')->nullable();
            $table->integer('application_landlord_solicitor_company_individual')->nullable();
            $table->integer('application_tenant_solicitor_company')->nullable();
            $table->integer('application_tenant_solicitor_company_individual')->nullable();
            $table->dateTime('application_date_created')->timestamp();
            $table->tinyInteger('application_applicant_email_reminders')->default(1);
            $table->tinyInteger('application_holding_deposit_paid')->default(2);
            $table->tinyInteger('application_proceed')->default(3)->nullable();
            $table->tinyInteger('application_can_physically_view')->default(1);
             // Foreign keys
            $table->foreign('application_accountant_title', 'fk_application_application_accountant_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_bank_name', 'fk_application_application_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_employee', 'fk_application_application_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_property', 'fk_application_application_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_solicitor_title', 'fk_application_application_solicitor_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_trade2_title', 'fk_application_application_trade2_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_trade_title', 'fk_application_application_trade_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_property_room', 'fk_application_application_property_room')
                ->references('property_room_letting_id')->on('property_room_letting')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_status', 'fk_application_application_status')
                ->references('application_status_id')->on('application_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_type', 'fk_application_application_type')
                ->references('application_type_id')->on('application_type')
                ->onUpdate('cascade')->onDelete('restrict');
            // Consider adding indexes or foreign keys as appropriate for your schema.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
