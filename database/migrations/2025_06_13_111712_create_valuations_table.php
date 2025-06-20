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
        // Main valuation table with core fields
        Schema::create('valuation', function (Blueprint $table) {
            $table->integer('valuation_id')->primary();
            $table->integer('valuation_title')->nullable();
            $table->string('valuation_first_name', 50)->nullable();
            $table->string('valuation_surname', 50)->nullable();
            $table->tinyInteger('valuation_capacity')->nullable();
            $table->string('valuation_email')->nullable();
            $table->string('valuation_phone_home')->nullable();
            $table->string('valuation_phone_work')->nullable();
            $table->string('valuation_phone_mobile')->nullable();
            $table->integer('valuation_branch')->nullable();
            $table->integer('valuation_employee')->nullable();
            $table->integer('valuation_negotiator')->nullable();
            $table->unsignedTinyInteger('valuation_status')->nullable();
            $table->unsignedTinyInteger('valuation_lost_reason')->nullable();
            $table->text('valuation_notes')->nullable();
            $table->text('valuation_notes_private')->nullable();
            $table->text('valuation_value_notes')->nullable();
            $table->date('valuation_next_review_date')->nullable();
            $table->date('valuation_next_review_date_negotiator')->nullable();
            $table->date('valuation_next_review_date_lister')->nullable();
            $table->text('valuation_next_review_date_lister_notes')->nullable();
            $table->tinyInteger('valuation_lead_source')->nullable();
            $table->text('valuation_lead_source_notes')->nullable();
            $table->tinyInteger('valuation_occupancy')->nullable();
            $table->unsignedTinyInteger('valuation_reason')->nullable();
            $table->integer('valuation_lost_to')->nullable();
            $table->decimal('valuation_lost_sale_fee', 7, 2)->nullable();
            $table->integer('valuation_lost_sale_fee_type')->nullable();
            $table->tinyInteger('valuation_tenure_type')->nullable();
            $table->decimal('valuation_sale_fee', 7, 2)->default(1.00);
            $table->integer('valuation_sale_fee_type')->default(7);
            $table->decimal('valuation_tenant_find_fee', 7, 2)->default(62.50);
            $table->integer('valuation_tenant_find_fee_type')->default(3);
            $table->decimal('valuation_tenant_find_with_management_fee', 7, 2)->default(332.50);
            $table->integer('valuation_tenant_find_with_management_fee_type')->default(1);
            $table->decimal('valuation_management_fee', 7, 2)->default(10.00);
            $table->integer('valuation_management_fee_type')->default(2);
            $table->integer('valuation_to_landlord')->unsigned()->nullable();
            $table->bigInteger('valuation_to_vendor')->unsigned()->nullable();
            $table->integer('valuation_to_property')->unsigned()->nullable();
            $table->tinyInteger('valuation_condition')->nullable();
            $table->integer('valuation_contract_type')->nullable();
            $table->integer('valuation_multi_agent')->nullable();
            $table->text('valuation_multi_agent_notes')->nullable();
            $table->date('valuation_multi_agent_withdrawal_date')->nullable();
            $table->tinyInteger('valuation_instruct_epc')->nullable();
            $table->integer('valuation_photographer')->nullable();
            $table->tinyInteger('valuation_photographer_access')->nullable();
            $table->string('valuation_minimum_contract_period', 2)->default('0');
            $table->unsignedTinyInteger('valuation_letting_service')->nullable();
            $table->integer('valuation_lister')->nullable();
            $table->tinyInteger('valuation_instruction_override')->default(2);
            $table->tinyInteger('valuation_instruct_video')->nullable();
            $table->text('valuation_recommendations')->nullable();
            $table->dateTime('valuation_date_created')->nullable();
            $table->dateTime('valuation_date_updated')->nullable();
            $table->integer('valuation_created_by')->nullable();
            $table->integer('valuation_updated_by')->nullable();
            $table->text('valuation_referral_solicitor_notes')->nullable();
            $table->text('valuation_referral_mortgage_notes')->nullable();
            $table->text('valuation_tenant_contact_details')->nullable();
            $table->text('valuation_premium_price_guide_link')->nullable();
            $table->text('valuation_status_reason')->nullable();
            $table->tinyInteger('valuation_email_reminders')->default(1);
            $table->decimal('valuation_total_amount_paid_employee', 10, 2)->default(0.00);
            $table->decimal('valuation_property_living_space', 7, 2)->nullable();
            $table->tinyInteger('valuation_property_living_space_unit')->nullable();
            $table->smallInteger('valuation_price_per_square_foot')->nullable();
            $table->tinyInteger('valuation_valuer_inherited')->default(2);
            $table->text('valuation_ownership_period')->nullable();
            $table->text('valuation_extended_loft_conversion_info')->nullable();
            $table->text('valuation_major_improvements')->nullable();
            $table->text('valuation_timescale_selling')->nullable();
            $table->text('valuation_otm_details')->nullable();
            $table->text('valuation_other_vals')->nullable();
            $table->text('valuation_price_expectations')->nullable();
            $table->text('valuation_parking_arrangements')->nullable();
            $table->text('valuation_outdoor_space')->nullable();
            $table->text('valuation_instruct_video_reason')->nullable();
            $table->text('valuation_legal_owner_contact_details')->nullable();

            // Foreign key constraints
            $table->foreign('valuation_branch', 'fk_valuation_valuation_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_created_by', 'fk_valuation_valuation_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_employee', 'fk_valuation_valuation_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_lister', 'fk_valuation_valuation_lister')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_negotiator', 'fk_valuation_valuation_negotiator')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_title', 'fk_valuation_title_1')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_to_landlord', 'fk_valuation_valuation_to_landlord')
                ->references('landlord_id')->on('landlord')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_to_property', 'fk_valuation_valuation_to_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_to_vendor', 'fk_valuation_valuation_to_vendor')
                ->references('vendor_id')->on('vendor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_updated_by', 'fk_valuation_valuation_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_capacity', 'fk_valuation_capacity_1')
                ->references('capacity_id')->on('capacity')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_lost_to', 'fk_valuation_lost_to')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_multi_agent', 'fk_valuation_multi_agent')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_photographer', 'fk_valuation_photographer')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_lost_sale_fee_type', 'fk_valuation_lost_sale_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_sale_fee_type', 'fk_valuation_sale_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_tenant_find_fee_type', 'fk_valuation_tenant_find_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_tenant_find_with_management_fee_type', 'fk_valuation_tenant_find_with_mgmt_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_management_fee_type', 'fk_valuation_management_fee_type')
                ->references('fee_type_id')->on('fee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_tenure_type', 'fk_valuation_valuation_tenure_type')
                ->references('property_tenure_type_id')->on('property_tenure_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_condition', 'fk_valuation_valuation_condition')
                ->references('valuation_condition_id')->on('valuation_condition')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_contract_type', 'fk_valuation_valuation_condition_valuation_contract_type')
                ->references('contract_type_id')->on('contract_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_photographer_access', 'fk_valuation_valuation_photographer_access')
                ->references('property_access_arrangement_id')->on('property_access_arrangement')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_letting_service', 'fk_valuation_valuation_letting_service')
                ->references('letting_service_id')->on('letting_service')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_property_living_space_unit', 'fk_valuation_valuation_property_living_space_unit')
                ->references('property_area_unit_id')->on('property_area_unit')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        // Valuation property details table
        Schema::create('valuation_property', function (Blueprint $table) {
            $table->integer('valuation_property_id')->primary();
            $table->integer('valuation_id');
            $table->string('valuation_property_apartment_number_name', 60)->nullable();
            $table->string('valuation_property_number_name', 60)->nullable();
            $table->string('valuation_property_address_line_1', 60)->nullable();
            $table->string('valuation_property_address_line_2', 60)->nullable();
            $table->string('valuation_property_suburb', 60)->nullable();
            $table->string('valuation_property_town_city', 60)->nullable();
            $table->string('valuation_property_postcode', 8)->nullable();
            $table->integer('valuation_property_country')->nullable();
            $table->integer('valuation_property_availability')->nullable();
            $table->integer('valuation_property_category')->nullable();
            $table->integer('valuation_property_type')->nullable();
            $table->tinyInteger('valuation_property_no_bedrooms')->nullable();
            $table->tinyInteger('valuation_property_no_bathrooms')->nullable();
            $table->tinyInteger('valuation_property_no_receptions')->nullable();
            $table->decimal('valuation_property_price_from', 11, 2)->nullable();
            $table->decimal('valuation_property_price_to', 11, 2)->nullable();
            $table->decimal('valuation_property_price_asking', 11, 2)->nullable();
            $table->tinyInteger('valuation_price_qualifier')->nullable();
            $table->decimal('valuation_property_price_marketed', 11, 2)->nullable();
            $table->tinyInteger('valuation_price_qualifier_marketed')->nullable();

            $table->foreign('valuation_id', 'fk_valuation_property_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('valuation_property_country', 'fk_valuation_property_valuation_property_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_property_category', 'fk_valuation_property_valuation_property_category')
                ->references('property_category_id')->on('property_category')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_property_type', 'fk_valuation_property_valuation_property_type')
                ->references('property_type_id')->on('property_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_property_availability', 'fk_valuation_property_valuation_property_availability')
                ->references('valuation_availability_id')->on('valuation_availability')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_price_qualifier', 'fk_valuation_property_valuation_price_qualifier')
                ->references('price_qualifier_id')->on('property_price_qualifier')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_price_qualifier_marketed', 'fk_valuation_property_valuation_price_qualifier_marketed')
                ->references('price_qualifier_id')->on('property_price_qualifier')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        // Valuation contacts table for additional contacts (2-4)
        Schema::create('valuation_contacts', function (Blueprint $table) {
            $table->integer('valuation_contact_id')->primary();
            $table->integer('valuation_id');
            $table->tinyInteger('contact_number'); // 2, 3, or 4
            $table->integer('valuation_title')->nullable();
            $table->string('valuation_first_name', 50)->nullable();
            $table->string('valuation_surname', 50)->nullable();
            $table->string('valuation_email')->nullable();
            $table->string('valuation_phone_home')->nullable();
            $table->string('valuation_phone_work')->nullable();
            $table->string('valuation_phone_mobile')->nullable();
            $table->tinyInteger('valuation_capacity')->nullable();

            $table->foreign('valuation_id', 'fk_valuation_contacts_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('valuation_title', 'fk_valuation_contacts_valuation_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_capacity', 'fk_valuation_contacts_valuation_capacity')
                ->references('capacity_id')->on('capacity')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        // Valuation addresses table for additional addresses (2-4)
        Schema::create('valuation_addresses', function (Blueprint $table) {
            $table->integer('valuation_address_id')->primary();
            $table->integer('valuation_id');
            $table->tinyInteger('address_number'); // 2, 3, or 4
            $table->string('valuation_home_address_property_apartment_number_name', 60)->nullable();
            $table->string('valuation_home_address_property_number_name', 60)->nullable();
            $table->string('valuation_home_address_property_address_line_1', 60)->nullable();
            $table->string('valuation_home_address_property_address_line_2', 60)->nullable();
            $table->string('valuation_home_address_property_suburb', 60)->nullable();
            $table->string('valuation_home_address_property_town_city', 60)->nullable();
            $table->string('valuation_home_address_property_postcode', 8)->nullable();
            $table->integer('valuation_home_address_property_country')->nullable();

            $table->foreign('valuation_id', 'fk_valuation_addresses_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('valuation_home_address_property_country', 'fk_valuation_addresses_valuation_home_address_property_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        // Add remaining foreign keys to main valuation table
        Schema::table('valuation', function (Blueprint $table) {
            $table->foreign('valuation_status', 'fk_valuation_valuation_status')
                ->references('valuation_status_id')->on('valuation_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_lost_reason', 'fk_valuation_valuation_lost_reason')
                ->references('valuation_lost_reason_id')->on('valuation_lost_reason')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_lead_source', 'fk_valuation_valuation_lead_source')
                ->references('valuation_lead_source_id')->on('valuation_lead_source')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_occupancy', 'fk_valuation_valuation_occupancy')
                ->references('property_possession_status_id')->on('property_possession_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_reason', 'fk_valuation_valuation_reason')
                ->references('valuation_reason_id')->on('valuation_reason')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuation_addresses');
        Schema::dropIfExists('valuation_contacts');
        Schema::dropIfExists('valuation_property');
        Schema::dropIfExists('valuation');
    }
};
