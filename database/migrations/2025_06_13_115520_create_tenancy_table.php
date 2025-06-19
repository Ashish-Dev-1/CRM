<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy', function (Blueprint $table) {
            $table->integer('tenancy_id')->primary();
            $table->string('tenancy_token', 40)->nullable();
            $table->tinyInteger('tenancy_type')->nullable();
            $table->integer('tenancy_property')->nullable();
            $table->integer('tenancy_furnished')->nullable();
            $table->tinyInteger('tenancy_children')->nullable();
            $table->tinyInteger('tenancy_pets')->nullable();
            $table->tinyInteger('tenancy_smoking')->nullable();
            $table->tinyInteger('tenancy_property_part')->nullable();
            $table->integer('tenancy_property_part_room')->nullable();
            $table->text('tenancy_property_part_description')->nullable();
            $table->tinyInteger('tenancy_shared_facilities')->nullable();
            $table->text('tenancy_shared_facilities_description')->nullable();
            $table->date('tenancy_agreement_date')->nullable();
            $table->date('tenancy_start_date')->nullable();
            $table->smallInteger('tenancy_fixed_term')->nullable();
            $table->tinyInteger('tenancy_fixed_term_unit')->nullable();
            $table->date('tenancy_fixed_term_end_date')->nullable();
            $table->decimal('tenancy_rent_amount', 8, 2)->nullable();
            $table->integer('tenancy_rent_frequency')->nullable();
            $table->integer('tenancy_rent_payable')->nullable();
            $table->integer('tenancy_rent_agreement')->nullable();
            $table->text('tenancy_rent_frequency_schedule')->nullable();
            $table->tinyInteger('tenancy_rent_payment_method')->nullable();
            $table->tinyInteger('tenancy_council_pay_rent')->nullable();
            $table->tinyInteger('tenancy_rent_vat_rate')->nullable();
            $table->decimal('tenancy_service_charge_amount', 8, 2)->nullable();
            $table->integer('tenancy_service_charge_frequency')->nullable();
            $table->integer('tenancy_service_charge_payable')->nullable();
            $table->integer('tenancy_service_charge_agreement')->nullable();
            $table->text('tenancy_service_charge_frequency_schedule')->nullable();
            $table->tinyInteger('tenancy_service_charge_payment_method')->nullable();
            $table->tinyInteger('tenancy_service_charge_vat_rate')->nullable();
            $table->decimal('tenancy_insurance_amount', 8, 2)->nullable();
            $table->integer('tenancy_insurance_frequency')->nullable();
            $table->integer('tenancy_insurance_payable')->nullable();
            $table->integer('tenancy_insurance_agreement')->nullable();
            $table->text('tenancy_insurance_frequency_schedule')->nullable();
            $table->tinyInteger('tenancy_insurance_payment_method')->nullable();
            $table->tinyInteger('tenancy_insurance_vat_rate')->nullable();
            $table->text('tenancy_notes')->nullable();
            $table->integer('tenancy_agent_branch')->nullable();
            $table->integer('tenancy_agent_employee')->nullable();
            $table->tinyInteger('tenancy_letting_service')->nullable();
            $table->decimal('tenancy_tenant_find_fee', 10, 2)->nullable();
            $table->tinyInteger('tenancy_tenant_find_fee_type')->nullable();
            $table->decimal('tenancy_management_fee', 10, 2)->nullable();
            $table->tinyInteger('tenancy_management_fee_type')->nullable();
            $table->tinyInteger('tenancy_gas')->nullable();
            $table->tinyInteger('tenancy_electricity')->nullable();
            $table->tinyInteger('tenancy_water')->nullable();
            $table->tinyInteger('tenancy_oil')->nullable();
            $table->tinyInteger('tenancy_telephone')->nullable();
            $table->tinyInteger('tenancy_broadband')->nullable();
            $table->tinyInteger('tenancy_tv_licence')->nullable();
            $table->tinyInteger('tenancy_sat_cable_tv')->nullable();
            $table->tinyInteger('tenancy_council_tax')->nullable();
            $table->tinyInteger('tenancy_deposit_required')->nullable();
            $table->decimal('tenancy_deposit_amount', 8, 2)->nullable();
            $table->tinyInteger('tenancy_status')->nullable();
            $table->tinyInteger('tenancy_renewal_status')->default(4);
            $table->text('tenancy_renewal_notes')->nullable();
            $table->integer('tenancy_renewal_employee')->nullable();
            $table->integer('tenancy_is_renewal_id')->nullable();
            $table->tinyInteger('tenancy_is_renewal')->default(2);
            $table->date('tenancy_tnts_vacation_date')->nullable();
            $table->date('tenancy_official_end_date')->nullable();
            $table->tinyInteger('tenancy_move_out_reason')->nullable();
            $table->text('tenancy_move_out_notes')->nullable();
            $table->decimal('tenancy_tenant_find_with_management_fee', 7, 2)->nullable();
            $table->tinyInteger('tenancy_tenant_find_with_management_fee_type')->nullable();
            $table->tinyInteger('tenancy_overdue_tc_reminders')->default(1);
            $table->tinyInteger('tenancy_student')->nullable();
            $table->tinyInteger('tenancy_inspection_frequency')->nullable();
            $table->date('tenancy_last_inspection_date')->nullable();
            $table->date('tenancy_last_inspection_date_backup')->nullable();
            $table->integer('tenancy_move_out_employee')->nullable();
            $table->text('tenancy_inventory_ingoing_link')->nullable();
            $table->text('tenancy_inventory_outgoing_link')->nullable();
            $table->date('tenancy_notice_expiry_date')->nullable();
            $table->date('tenancy_accounts_next_review_date')->nullable();
            $table->tinyInteger('tenancy_viewings_permitted')->nullable();
            $table->dateTime('tenancy_date_created')->nullable();
            $table->dateTime('tenancy_date_updated')->nullable();
            $table->integer('tenancy_created_by')->nullable();
            $table->integer('tenancy_updated_by')->nullable();
            $table->tinyInteger('tenancy_management_takeover')->nullable();
            $table->date('tenancy_management_takeover_date')->nullable();
            $table->text('tenancy_management_takeover_notes')->nullable();
            $table->tinyInteger('tenancy_periodic_rent_increase_negotiator')->nullable();
            $table->date('tenancy_rlei_opt_out_date')->nullable();

            $table->foreign('tenancy_agent_branch', 'fk_tenancy_tenancy_agent_branch')
    ->references('branch_id')->on('branch')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_agent_employee', 'fk_tenancy_agent_employee')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_periodic_rent_increase_negotiator', 'fk_tenancy_rent_increase_negotiator')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_created_by', 'fk_tenancy_tenancy_created_by')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_insurance_vat_rate', 'fk_tenancy_tenancy_insurance_vat_rate')
    ->references('vat_rate_id')->on('accounts_vat_rate')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_move_out_employee', 'fk_tenancy_tenancy_move_out_employee')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_property', 'fk_tenancy_tenancy_property')
    ->references('property_id')->on('property')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_renewal_employee', 'fk_tenancy_tenancy_renewal_employee')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_rent_vat_rate', 'fk_tenancy_tenancy_rent_vat_rate')
    ->references('vat_rate_id')->on('accounts_vat_rate')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_service_charge_vat_rate', 'fk_tenancy_tenancy_service_charge_vat_rate')
    ->references('vat_rate_id')->on('accounts_vat_rate')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_updated_by', 'fk_tenancy_tenancy_updated_by')
    ->references('employee_id')->on('employee')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_type', 'fk_tenancy_tenancy_type')
    ->references('property_category_id')->on('property_category')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_property_part_room', 'fk_tenancy_tenancy_property_part_room')
    ->references('property_room_letting_id')->on('property_room_letting')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_fixed_term_unit', 'fk_tenancy_tenancy_fixed_term_unit')
    ->references('tenancy_fixed_term_unit_id')->on('tenancy_fixed_term_unit')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_rent_frequency', 'fk_tenancy_rent_frequency')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_rent_payable', 'fk_tenancy_rent_payable')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_service_charge_frequency', 'fk_tenancy_service_charge_frequency')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_insurance_frequency', 'fk_tenancy_insurance_frequency')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_service_charge_payable', 'fk_tenancy_service_charge_payable')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_insurance_payable', 'fk_tenancy_insurance_payable')
    ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_rent_agreement', 'fk_tenancy_rent_agreement')
    ->references('tenancy_rent_agreement_id')->on('tenancy_rent_agreement')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_service_charge_agreement', 'fk_tenancy_service_charge_agreement')
    ->references('tenancy_rent_agreement_id')->on('tenancy_rent_agreement')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_insurance_agreement', 'fk_tenancy_insurance_agreement')
    ->references('tenancy_rent_agreement_id')->on('tenancy_rent_agreement')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_rent_payment_method', 'fk_tenancy_rent_payment_method')
    ->references('tenancy_payment_method_id')->on('tenancy_payment_method')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_service_charge_payment_method', 'fk_tenancy_service_charge_payment_method')
    ->references('tenancy_payment_method_id')->on('tenancy_payment_method')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_insurance_payment_method', 'fk_tenancy_insurance_payment_method')
    ->references('tenancy_payment_method_id')->on('tenancy_payment_method')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_letting_service', 'fk_tenancy_tenancy_letting_service')
    ->references('letting_service_id')->on('letting_service')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_tenant_find_fee_type', 'fk_tenancy_tenant_find_fee_type')
    ->references('fee_type_id')->on('fee_type')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_management_fee_type', 'fk_tenancy_management_fee_type')
    ->references('fee_type_id')->on('fee_type')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_tenant_find_with_management_fee_type', 'fk_tenancy_tenant_find_with_management_fee_type')
    ->references('fee_type_id')->on('fee_type')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_status', 'fk_tenancy_tenancy_status')
    ->references('tenancy_status_id')->on('tenancy_status')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_renewal_status', 'fk_tenancy_tenancy_renewal_status')
    ->references('tenancy_renewal_status_id')->on('tenancy_renewal_status')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_id', 'fk_tenancy_tenancy_is_renewal_id')
    ->references('tenancy_id')->on('tenancy')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_move_out_reason', 'fk_tenancy_tenancy_move_out_reason')
    ->references('tenancy_move_out_reason_id')->on('tenancy_move_out_reason')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_inspection_frequency', 'fk_tenancy_tenancy_inspection_frequency')
    ->references('tenancy_inspection_frequency_id')->on('tenancy_inspection_frequency')
    ->onUpdate('cascade')->onDelete('restrict');
$table->foreign('tenancy_property_part', 'fk_tenancy_tenancy_property_part')
    ->references('tenancy_property_part_id')->on('tenancy_property_part')
    ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy');
    }
};
