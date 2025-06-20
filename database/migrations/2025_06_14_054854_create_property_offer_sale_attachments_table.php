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
        Schema::create('property_offer_sale_attachments', function (Blueprint $table) {
            $table->integer('property_offer_sale_attachments_id')->primary();
            $table->integer('property_offer_sale_id')->nullable();
            $table->string('property_offer_sale_attachments_filename', 255)->nullable();
            $table->string('property_offer_sale_attachments_caption', 100)->nullable();
            $table->mediumInteger('property_offer_sale_attachments_sort')->nullable();
            $table->dateTime('property_offer_sale_attachments_date_created')->nullable();
            $table->integer('property_offer_sale_attachments_created_by')->nullable();

            // Foreign keys
            $table->foreign('property_offer_sale_attachments_created_by', 'fk_property_offer_sale_attachments_property_offer_sale_')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_offer_sale_id', 'fk_property_offer_sale_attachments_property_offer_sale_id')
                ->references('property_offer_sale_id')->on('property_offer_sale')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_attachments');
    }
};
