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
        Schema::create('property_offer_sale_updates', function (Blueprint $table) {
            $table->integer('property_offer_sale_updates_id')->primary();
            $table->integer('property_offer_sale_updates_property_offer_sale_id')->nullable();
            $table->text('property_offer_sale_updates_public_notes')->nullable();
            $table->text('property_offer_sale_updates_private_notes')->nullable();
            $table->tinyInteger('property_offer_sale_updates_notify_vendors')->nullable();
            $table->tinyInteger('property_offer_sale_updates_notify_applicants')->nullable();
            $table->tinyInteger('property_offer_sale_updates_notify_sales_negotiation')->nullable();
            $table->tinyInteger('property_offer_sale_updates_notify_sales_progression')->nullable();
            $table->dateTime('property_offer_sale_updates_date_created')->nullable();
            $table->integer('property_offer_sale_updates_created_by')->nullable();
            // Foreign keys
            $table->foreign('property_offer_sale_updates_created_by', 'fk_property_offer_sale_updates_property_offer_sale_upda')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_updates_property_offer_sale_id', 'fk_prop_offer_sale_updates_prop_offer_sale_updates_prop_off')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_updates');
    }
};
