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
        Schema::create('sale_updates', function (Blueprint $table) {
            $table->integer('sale_updates_id')->primary();
            $table->integer('sale_updates_sale_id')->nullable();
            $table->text('sale_updates_public_notes')->nullable();
            $table->text('sale_updates_private_notes')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_solicitor_intermediary')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_solicitor_intermediary')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_solicitor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_solicitor')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_mortgage_advisor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_mortgage_advisor')->nullable();
            $table->tinyInteger('sale_updates_notify_sales_progression')->nullable();
            $table->dateTime('sale_updates_date_created')->nullable();
            $table->integer('sale_updates_created_by')->nullable();

            $table->foreign('sale_updates_created_by', 'fk_sale_updates_sale_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_updates');
    }
};
