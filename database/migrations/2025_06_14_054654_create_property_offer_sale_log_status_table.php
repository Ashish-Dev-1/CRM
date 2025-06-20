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
        Schema::create('property_offer_sale_log_status', function (Blueprint $table) {
            $table->integer('property_offer_sale_log_status_id')->primary();
            $table->integer('property_offer_sale_id')->nullable();
            $table->tinyInteger('property_offer_sale_status_old')->nullable();
            $table->tinyInteger('property_offer_sale_status_new')->nullable();
            $table->integer('property_offer_sale_updated_by')->nullable();
            $table->dateTime('property_offer_sale_date_updated')->nullable();

             // Foreign keys
            $table->foreign('property_offer_sale_updated_by', 'fk_property_offer_sale_log_status_property_offer_sale_u')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_id', 'fk_property_offer_sale_log_status_property_offer_sale_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_offer_sale_status_old', 'fk_property_offer_sale_status_old')
                ->references('property_offer_status_id')->on('property_offer_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_status_new', 'fk_property_offer_sale_status_new')
                ->references('property_offer_status_id')->on('property_offer_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_log_status');
    }
};
