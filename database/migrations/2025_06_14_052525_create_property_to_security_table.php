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
        Schema::create('property_to_security', function (Blueprint $table) {
            $table->integer('property_to_security_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->tinyInteger('property_security_id');

            $table->foreign('property_id', 'fk_property_to_security_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            // Foreign key constraint for property_security_id removed due to migration order issue
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_to_security');
    }
};
