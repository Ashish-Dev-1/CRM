<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_log_status', function (Blueprint $table) {
            $table->id('valuation_log_status_id');
            $table->unsignedInteger('valuation_id')->nullable();
            $table->tinyInteger('valuation_status_old')->nullable();
            $table->tinyInteger('valuation_status_new')->nullable();
            $table->unsignedInteger('valuation_updated_by')->nullable();
            $table->dateTime('valuation_date_updated')->nullable();

            $table->foreign('valuation_updated_by', 'fk_valuation_log_status_valuation_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_id', 'fk_valuation_log_status_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('valuation_status_old', 'fk_valuation_status_old')
                ->references('valuation_status_id')->on('valuation_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_status_new', 'fk_valuation_status_new')
                ->references('valuation_status_id')->on('valuation_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_log_status');
    }
};
