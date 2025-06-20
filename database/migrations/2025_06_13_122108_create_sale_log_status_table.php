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
        Schema::create('sale_log_status', function (Blueprint $table) {
            $table->integer('sale_log_status_id')->primary();
            $table->integer('sale_id')->nullable();
            $table->tinyInteger('sale_status_old')->nullable();
            $table->tinyInteger('sale_status_new')->nullable();
            $table->integer('sale_updated_by')->nullable();
            $table->dateTime('sale_date_updated')->nullable();

            $table->foreign('sale_updated_by', 'fk_sale_log_status_sale_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_id', 'fk_sale_log_status_sale_id')
                ->references('sale_id')->on('sale')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sale_status_old', 'fk_sale_status_old')
                ->references('sale_status_id')->on('sale_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_status_new', 'fk_sale_status_new')
                ->references('sale_status_id')->on('sale_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_log_status');
    }
};
