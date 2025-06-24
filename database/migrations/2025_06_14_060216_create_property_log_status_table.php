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
        Schema::create('property_log_status', function (Blueprint $table) {
            $table->integer('property_log_status_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->integer('property_status_old')->nullable();
            $table->integer('property_status_new')->nullable();
            $table->text('property_status_notes')->nullable();
            $table->boolean('property_published')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->dateTime('property_date_updated')->nullable();

             // Foreign keys
            $table->foreign('property_updated_by', 'fk_property_log_status_property_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_property_log_status_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_log_status');
    }
};
