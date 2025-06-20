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
        Schema::create('local_authority', function (Blueprint $table) {
            $table->increments('local_authority_id');
            $table->string('local_authority_name', 255)->nullable();
            $table->string('local_authority_housing_department_name', 100)->nullable();
            $table->string('local_authority_property_number_name', 50)->nullable();
            $table->string('local_authority_address_line_1', 255)->nullable();
            $table->string('local_authority_address_line_2', 255)->nullable();
            $table->string('local_authority_suburb', 255)->nullable();
            $table->string('local_authority_town_city', 255)->nullable();
            $table->string('local_authority_postcode', 8)->nullable();
            $table->integer('local_authority_country')->nullable();
            $table->tinyInteger('local_authority_selective_licencing')->nullable();
            $table->date('local_authority_selective_licencing_start_date')->nullable();
            $table->date('local_authority_selective_licencing_end_date')->nullable();
            $table->string('local_authority_selective_licencing_email_address', 255)->nullable();

            // Foreign key
            $table->foreign('local_authority_country', 'fk_local_authority_local_authority_country')
                ->references('country_id')->on('country')
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
        Schema::dropIfExists('local_authority');
    }
};
