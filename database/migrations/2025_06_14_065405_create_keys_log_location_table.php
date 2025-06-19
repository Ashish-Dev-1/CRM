<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('keys_log_location', function (Blueprint $table) {
            $table->increments('keys_log_location_id');
            $table->integer('property_id')->nullable();
            $table->integer('keys_location')->nullable();
            $table->integer('keys_log_location_updated_by')->nullable();
            $table->dateTime('keys_log_location_date_updated')->nullable();

            // Foreign keys
            $table->foreign('keys_log_location_updated_by', 'fk_keys_log_location_keys_log_location_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_keys_log_location_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_location', 'fk_keys_log_location_keys_location')
                ->references('keys_location_id')->on('keys_location')
                ->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keys_log_location');
    }
};
