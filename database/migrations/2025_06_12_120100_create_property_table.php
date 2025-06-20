<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->string('property_token', 40)->nullable();
            $table->tinyInteger('property_availability')->nullable();
            $table->tinyInteger('property_letting_service')->nullable();
            $table->date('property_letting_available_from')->nullable();
            $table->tinyInteger('property_letting_furnished_status')->nullable();
            $table->tinyInteger('property_letting_pets')->nullable();
            $table->tinyInteger('property_letting_smoking')->nullable();
            $table->tinyInteger('property_category')->nullable();
            $table->integer('property_type')->nullable();
            $table->string('property_number_name', 255)->nullable();
            $table->string('property_apartment_number_name', 255)->nullable();
            $table->string('property_address_line_1', 255)->nullable();
            $table->string('property_address_line_2', 255)->nullable();
            $table->integer('property_suburb')->nullable();
            $table->string('property_town_city', 255)->nullable();
            $table->string('property_postcode', 8)->nullable();
            $table->integer('property_country')->nullable();
            $table->string('property_display_address', 120)->nullable();
            $table->string('property_plot_reference', 255)->nullable();
            $table->decimal('property_latitude', 12, 9)->nullable();
            $table->decimal('property_longitude', 12, 9)->nullable();
            $table->tinyInteger('property_price_qualifier')->nullable();
            $table->integer('property_price')->nullable();
            $table->integer('property_deposit')->nullable();
            $table->integer('property_admin_fee')->nullable();
            $table->tinyInteger('property_currency')->nullable();
            $table->integer('property_area_value')->nullable();
            $table->tinyInteger('property_area_type')->nullable();
            $table->tinyInteger('property_bathrooms')->nullable();
            $table->tinyInteger('property_bedrooms')->nullable();
            $table->tinyInteger('property_reception_rooms')->nullable();
            $table->tinyInteger('property_garages')->nullable();
            $table->tinyInteger('property_parking_spaces')->nullable();
            $table->tinyInteger('property_garden')->nullable();
            $table->tinyInteger('property_garden_access')->nullable();
            $table->tinyInteger('property_garden_location')->nullable();
            $table->boolean('property_is_new_home')->nullable();
            $table->text('property_summary_text')->nullable();
            $table->text('property_description_text')->nullable();
            $table->string('property_virtual_tour', 255)->nullable();
            $table->string('property_brochure_url', 255)->nullable();
            $table->string('property_video_url', 255)->nullable();
            $table->boolean('property_featured')->nullable();
            $table->integer('property_branch')->nullable();
            $table->integer('property_contact_group')->nullable();
            $table->text('property_instructions')->nullable();
            $table->integer('property_status')->nullable();
            $table->dateTime('property_create_time')->nullable();
            $table->dateTime('property_update_time')->nullable();
            $table->dateTime('property_valuation_time')->nullable();
            $table->dateTime('property_display_time')->nullable();
            $table->dateTime('property_expiry_time')->nullable();
            $table->text('property_viewing_arrangement')->nullable();
            $table->tinyInteger('property_viewing_length')->nullable();
            $table->tinyInteger('property_board')->nullable();
            $table->tinyInteger('property_board_status')->nullable();
            $table->tinyInteger('property_board_location')->nullable();
            $table->string('property_board_location_custom', 100)->nullable();
            $table->string('property_board_notes', 255)->nullable();
            $table->string('property_keys', 100)->nullable();
            $table->string('property_keys_notes', 255)->nullable();
            $table->integer('property_lease_remaining')->nullable();
            $table->integer('property_ground_rent')->nullable();
            $table->integer('property_service_charge')->nullable();
            $table->string('property_council_tax_band', 5)->nullable();
            $table->tinyInteger('property_current_occupier')->nullable();
            $table->string('property_buyer', 255)->nullable();
            $table->string('property_tenant', 255)->nullable();
            $table->string('property_vendor', 255)->nullable();
            $table->string('property_landlord', 255)->nullable();
            $table->boolean('property_chain_free')->nullable();
            $table->text('property_chain_notes')->nullable();
            $table->boolean('property_website_publish')->nullable();
            $table->string('property_website_title', 120)->nullable();
            $table->boolean('property_portal_publish')->nullable();
            $table->boolean('property_publish_zoopla')->nullable();
            $table->boolean('property_publish_primelocation')->nullable();
            $table->boolean('property_publish_onthemarket')->nullable();
            $table->boolean('property_publish_rightmove')->nullable();
            $table->string('property_rightmove_brochure_url', 255)->nullable();
            $table->boolean('property_rightmove_window_display')->nullable();
            $table->boolean('property_rightmove_audio_tour')->nullable();
            $table->boolean('property_rightmove_virtual_tour')->nullable();
            $table->boolean('property_rightmove_featured_property')->nullable();
            $table->boolean('property_rightmove_premium_listing')->nullable();
            $table->boolean('property_rightmove_branded_tour')->nullable();
            $table->boolean('property_zoopla_premium_listing')->nullable();
            $table->boolean('property_zoopla_featured_property')->nullable();
            $table->boolean('property_zoopla_slideshow')->nullable();
            $table->dateTime('property_internet_updated')->nullable();
            $table->string('property_schedule_pdf', 255)->nullable();
            $table->boolean('property_branch_visible')->nullable();
            $table->boolean('property_corporate_instruction')->nullable();
            $table->integer('property_created_by')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->integer('property_contract_type')->nullable();
             // Foreign keys
            $table->foreign('property_created_by', 'fk_property_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_updated_by', 'fk_property_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_branch', 'fk_property_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_status', 'fk_property_status')
                ->references('property_status_id')->on('property_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_type', 'fk_property_type')
                ->references('property_type_id')->on('property_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_country', 'fk_property_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_contract_type', 'fk_property_contract_type')
                ->references('contract_type_id')->on('contract_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property');
    }
};