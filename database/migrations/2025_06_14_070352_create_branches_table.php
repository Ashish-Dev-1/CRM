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
        Schema::create('branch', function (Blueprint $table) {
            $table->integer('branch_id')->primary();
            $table->smallInteger('branch_company_id')->nullable();
            $table->string('branch_company_name', 255)->nullable();
            $table->string('branch_name', 20)->nullable();
            $table->decimal('branch_sole_sale_fee', 7, 2)->nullable();
            $table->decimal('branch_multi_sale_fee', 7, 2)->nullable();
            $table->tinyInteger('branch_sole_sale_fee_type')->nullable();
            $table->tinyInteger('branch_multi_sale_fee_type')->nullable();
            $table->decimal('branch_sole_sale_fee_min_no_viewings', 7, 2)->nullable();
            $table->decimal('branch_sole_sale_fee_min_with_viewings', 7, 2)->nullable();
            $table->decimal('branch_multi_sale_fee_min_no_viewings', 7, 2)->nullable();
            $table->decimal('branch_multi_sale_fee_min_with_viewings', 7, 2)->nullable();
            $table->decimal('branch_tenant_find_fee', 7, 2)->nullable();
            $table->decimal('branch_tenant_find_fee_min', 7, 2)->nullable();
            $table->decimal('branch_tenant_find_with_management_fee', 7, 2)->nullable();
            $table->decimal('branch_tenant_find_with_management_fee_min_commercial', 7, 2)->nullable();
            $table->decimal('branch_management_fee', 7, 2)->nullable();
            $table->decimal('branch_management_fee_commercial', 7, 2)->nullable();
            $table->tinyInteger('branch_tenant_find_fee_type')->nullable();
            $table->tinyInteger('branch_tenant_find_with_management_fee_type')->nullable();
            $table->tinyInteger('branch_management_fee_type')->nullable();
            $table->text('branch_tenant_fees')->nullable();
            $table->string('branch_tenant_fees_commercial', 150)->nullable();
            $table->string('branch_sale_phone', 20)->nullable();
            $table->string('branch_letting_phone', 20)->nullable();
            $table->string('branch_sale_fax', 20)->nullable();
            $table->string('branch_letting_fax', 20)->nullable();
            $table->string('branch_sale_email', 255)->nullable();
            $table->string('branch_sale_email_commercial', 255)->nullable();
            $table->string('branch_letting_email', 255)->nullable();
            $table->string('branch_letting_email_commercial', 255)->nullable();
            $table->string('branch_accounts_email', 255)->nullable();
            $table->string('branch_works_email', 255)->nullable();
            $table->string('branch_property_number_name', 50)->nullable();
            $table->string('branch_address_line_1', 255)->nullable();
            $table->string('branch_address_line_2', 255)->nullable();
            $table->string('branch_suburb', 255)->nullable();
            $table->string('branch_town_city', 255)->nullable();
            $table->string('branch_postcode', 8)->nullable();
            $table->integer('branch_country')->nullable();
            $table->decimal('branch_reminder_letter_fee', 7, 2)->nullable();
            $table->decimal('branch_missed_payment_fee', 7, 2)->nullable();
            $table->tinyInteger('branch_bank_name_current')->nullable();
            $table->string('branch_bank_sort_code_current', 8)->nullable();
            $table->string('branch_bank_account_number_current', 8)->nullable();
            $table->string('branch_bank_iban_current', 50)->nullable();
            $table->string('branch_bank_bic_swift_current', 11)->nullable();
            $table->string('branch_bank_account_name_current', 255)->nullable();
            $table->tinyInteger('branch_bank_name_client')->nullable();
            $table->string('branch_bank_sort_code_client', 8)->nullable();
            $table->string('branch_bank_account_number_client', 8)->nullable();
            $table->string('branch_bank_iban_client', 50)->nullable();
            $table->string('branch_bank_bic_swift_client', 11)->nullable();
            $table->string('branch_bank_account_name_client', 255)->nullable();
            $table->string('branch_bank_bacs_file_originator_name', 18)->nullable();
            $table->string('branch_cheque_payable_to', 100)->nullable();
            $table->float('branch_latitude', 10, 6)->nullable();
            $table->float('branch_longitude', 10, 6)->nullable();
            $table->text('branch_xmas_opening_description')->nullable();
            $table->text('branch_easter_opening_description')->nullable();
            $table->string('branch_zpg_ref', 10)->nullable();
            $table->tinyInteger('branch_inspection_frequency')->default(1);
            $table->smallInteger('branch_mileage_payment', 3)->nullable();
            $table->text('branch_accompanied_viewing_schedule')->nullable();
            $table->string('branch_redress_scheme', 255)->nullable();
            $table->string('branch_cmp_provider', 255)->nullable();
            $table->text('branch_cmp_provider_accounting_rules')->nullable();
            $table->string('branch_hmrc_nrl_ref', 20)->nullable();
            $table->string('branch_deposit_protection_service_id', 50)->nullable();
            $table->string('branch_deposit_protection_service_bank_account_name', 100)->nullable();
            $table->string('branch_deposit_protection_service_bank_account_number', 8)->nullable();
            $table->string('branch_deposit_protection_service_bank_sort_code', 8)->nullable();
            $table->string('branch_mydeposits_id', 50)->nullable();
            $table->string('branch_ip_address', 45)->nullable();
             // Foreign keys
            $table->foreign('branch_company_id', 'fk_branch_branch_company_id')
                ->references('company_id')->on('company')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('branch_country', 'fk_branch_branch_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('branch_bank_name_current', 'fk_branch_branch_bank_name_current')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('branch_bank_name_client', 'fk_branch_branch_bank_name_client')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
