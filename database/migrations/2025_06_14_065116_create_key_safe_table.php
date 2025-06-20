<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('key_safe', function (Blueprint $table) {
            $table->increments('key_safe_id');
            $table->integer('key_safe_property')->nullable();
            $table->integer('key_safe_development')->nullable();
            $table->string('key_safe_code', 10)->nullable();
            $table->tinyInteger('key_safe_location')->nullable();
            $table->text('key_safe_contains')->nullable();
            $table->text('key_safe_notes')->nullable();
            $table->date('key_safe_date_added')->nullable();
            $table->integer('key_safe_created_by')->nullable();

            // Foreign keys
            $table->foreign('key_safe_created_by', 'fk_key_safe_key_safe_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('key_safe_development', 'fk_key_safe_key_safe_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('key_safe_property', 'fk_key_safe_key_safe_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('key_safe_location', 'fk_key_safe_key_safe_location')
                ->references('key_safe_location_id')->on('key_safe_location')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_safe');
    }
};
