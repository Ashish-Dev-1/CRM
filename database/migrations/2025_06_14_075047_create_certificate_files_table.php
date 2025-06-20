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
        Schema::create('certificate_files', function (Blueprint $table) {
            $table->integer('file_id', true);
            $table->integer('certificate_id');
            $table->string('filename', 100);
            $table->dateTime('date_added')->nullable();
            $table->tinyInteger('sort')->nullable();
            $table->string('caption', 250)->nullable();
            
            // Add foreign key constraint
            $table->foreign('certificate_id', 'fk_certificate_files_certificate_id')
                ->references('certificate_id')->on('certificate')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_files');
    }
};
