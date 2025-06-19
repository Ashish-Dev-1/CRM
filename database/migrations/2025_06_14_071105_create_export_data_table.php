<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('export_data', function (Blueprint $table) {
            $table->integer('export_data_id')->primary();
            $table->tinyInteger('export_data_type')->nullable();
            $table->dateTime('export_data_date_exported')->nullable();
            $table->dateTime('export_data_last_invoice_posted_date')->nullable();
            $table->dateTime('export_data_last_invoice_credit_posted_date')->nullable();
            $table->dateTime('export_data_last_bacs_file_entry_date')->nullable();
            // Foreign key
            $table->foreign('export_data_type', 'fk_export_data_export_data_type')
                ->references('export_date_type_id')->on('export_date_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('export_data');
    }
};
