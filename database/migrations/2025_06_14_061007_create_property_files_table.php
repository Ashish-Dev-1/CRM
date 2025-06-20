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
        Schema::create('property_files', function (Blueprint $table) {
            $table->integer('file_id')->primary();
            $table->integer('property_id');
            $table->string('filename', 100);
            $table->string('caption', 100)->nullable();
            $table->dateTime('date_added')->nullable();
            $table->mediumInteger('sort')->nullable();
            // Foreign key
            $table->foreign('property_id', 'fk_property_files_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_files');
    }
};
