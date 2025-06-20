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
        Schema::create('property_offer_sale_chain', function (Blueprint $table) {
            $table->integer('property_offer_sale_chain_id')->primary();
            $table->tinyInteger('property_offer_sale_chain_sort')->nullable();
            $table->integer('property_offer_sale_id')->nullable();
            $table->string('property_offer_sale_chain_name', 255)->nullable();
            $table->string('property_offer_sale_chain_property_address', 255)->nullable();
            $table->integer('property_offer_vendor_property_id')->nullable();
            $table->string('property_offer_sale_chain_buyers_name', 255)->nullable();
            $table->integer('property_offer_buyer_property_id')->nullable();
            $table->decimal('property_offer_sale_chain_sale_price', 11, 2)->nullable();
            $table->tinyInteger('property_offer_sale_chain_selling')->nullable();
            $table->text('property_offer_sale_chain_estate_agent_details')->nullable();
            $table->tinyInteger('property_offer_sale_chain_position')->nullable();
            $table->tinyInteger('property_offer_sale_chain_status')->nullable();
            $table->tinyInteger('property_offer_sale_chain_mortgage')->nullable();
            $table->tinyInteger('property_offer_sale_chain_survey')->nullable();
            $table->tinyInteger('property_offer_sale_chain_checked')->nullable();
            $table->text('property_offer_sale_chain_notes')->nullable();
            $table->dateTime('property_offer_sale_chain_date_created')->nullable();
            $table->dateTime('property_offer_sale_chain_date_updated')->nullable();
            $table->integer('property_offer_sale_chain_created_by')->nullable();
            $table->integer('property_offer_sale_chain_updated_by')->nullable();

            // Foreign keys
            $table->foreign('property_offer_buyer_property_id', 'fk_property_offer_sale_chain_property_offer_buyer_prope')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_chain_created_by', 'fk_property_offer_sale_chain_property_offer_sale_chain_')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_chain_updated_by', 'fk_property_offer_sale_chain_property_offer_sale_chain__1')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_vendor_property_id', 'fk_property_offer_vendor_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_buyer_property_id', 'fk_property_offer_buyer_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_id', 'fk_property_offer_sale_chain_property_offer_sale_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_offer_sale_chain_position', 'fk_property_offer_sale_chain_property_offer_sale_chain_position')
                ->references('property_offer_sale_chain_position_id')->on('property_offer_sale_chain_position')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_chain_status', 'fk_property_offer_sale_chain_property_offer_sale_chain_status')
                ->references('property_offer_sale_chain_status_id')->on('property_offer_sale_chain_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_chain');
    }
};
