<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_log_price', function (Blueprint $table) {
            $table->integer('property_log_price_id')->primary();
            $table->integer('property_id')->nullable();
            $table->decimal('property_price_old', 11, 2)->nullable();
            $table->decimal('property_price_new', 11, 2)->nullable();
            $table->boolean('property_published')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->dateTime('property_date_updated')->nullable();

            // Foreign keys
            $table->foreign('property_updated_by', 'fk_property_log_price_property_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_property_log_price_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_log_price');
    }
};
