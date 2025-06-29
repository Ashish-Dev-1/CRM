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
        Schema::create('local_authority_ward', function (Blueprint $table) {
            $table->increments('local_authority_ward_id');
            $table->string('local_authority_ward_name', 100)->nullable();
            $table->tinyInteger('local_authority_ward_selective_licencing')->nullable();
            $table->date('local_authority_ward_selective_licencing_start_date')->nullable();
            $table->date('local_authority_ward_selective_licencing_end_date')->nullable();
            $table->integer('local_authority_id')->nullable();

            // Foreign key
            // Foreign key constraint for local_authority_id removed due to migration order issue
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
        Schema::dropIfExists('local_authority_ward');
    }
};
