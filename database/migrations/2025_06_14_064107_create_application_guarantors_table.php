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
        Schema::create('application_guarantors', function (Blueprint $table) {
            $table->integer('application_guarantor_id')->primary();
            $table->integer('application_id')->nullable();
            $table->tinyInteger('application_guarantor_title')->nullable();
            $table->string('application_guarantor_first_name', 30)->nullable();
            $table->string('application_guarantor_surname', 255)->nullable();
            $table->string('application_guarantor_telephone_numbers', 255)->nullable();
            $table->string('application_guarantor_email_address', 255)->nullable();
            $table->string('application_guarantor_address_line_1', 255)->nullable();
            $table->string('application_guarantor_address_line_2', 255)->nullable();
            $table->string('application_guarantor_town_city', 255)->nullable();
            $table->string('application_guarantor_post_code', 8)->nullable();
            $table->tinyInteger('application_guarantor_homeowner')->nullable();
            $table->date('application_guarantor_dob')->nullable();
            $table->string('application_guarantor_nino', 13)->nullable();
            $table->tinyInteger('application_guarantor_employment_status')->nullable();
            $table->string('application_guarantor_employment_nature', 255)->nullable();
            $table->decimal('application_guarantor_income', 10, 2)->nullable();
            $table->smallInteger('application_guarantor_nationality')->nullable();
            $table->string('application_guarantor_applicant_name', 255)->nullable();
            // Foreign keys
            $table->foreign('application_guarantor_title', 'fk_application_guarantor_application_guarantor_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_id', 'fk_application_guarantor_application_id')
                ->references('application_id')->on('application')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_guarantor_employment_status', 'fk_application_guarantor_application_guarantor_employment_s')
                ->references('employment_status_id')->on('employment_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_guarantor_nationality', 'fk_application_guarantor_application_guarantor_nationality')
                ->references('nationality_id')->on('nationality')
                ->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_guarantors');
    }
};
