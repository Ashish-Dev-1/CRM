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
        Schema::create('application_applicants', function (Blueprint $table) {
            $table->integer('application_applicant_id')->primary();
            $table->integer('application_id')->nullable();
            $table->tinyInteger('application_applicant_type')->nullable();
            $table->tinyInteger('application_homeowner', 1)->nullable();
            $table->tinyInteger('application_title')->nullable();
            $table->string('application_first_name', 255)->nullable();
            $table->string('application_surname', 255)->nullable();
            $table->string('application_telephone_numbers', 255)->nullable();
            $table->string('application_email_address', 255)->nullable();
            $table->date('application_dob')->nullable();
            $table->smallInteger('application_nationality')->nullable();
            $table->string('application_nino', 13)->nullable();
            $table->string('application_address_line_1', 255)->nullable();
            $table->string('application_address_line_2', 255)->nullable();
            $table->string('application_town_city', 255)->nullable();
            $table->string('application_post_code', 8)->nullable();
            $table->tinyInteger('application_employment_status')->nullable();
            $table->string('application_employment_nature', 255)->nullable();
            $table->decimal('application_income', 10, 2)->nullable();
            $table->string('application_company_legal_name', 255)->nullable();
            $table->string('application_company_trading_name', 255)->nullable();
            $table->string('application_company_registration_number', 10)->nullable();
            $table->string('application_company_vat_registration_number', 20)->nullable();
            $table->tinyInteger('application_company_title')->nullable();
            $table->string('application_company_first_name', 255)->nullable();
            $table->string('application_company_surname', 255)->nullable();
            $table->string('application_company_telephone_numbers', 255)->nullable();
            $table->string('application_company_email_address', 255)->nullable();
            $table->string('application_company_ro_address_line_1', 255)->nullable();
            $table->string('application_company_ro_address_line_2', 255)->nullable();
            $table->string('application_company_ro_town_city', 255)->nullable();
            $table->string('application_company_ro_post_code', 8)->nullable();
             // Foreign keys
            $table->foreign('application_id', 'fk_application_applicant_application_applicant_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_company_title', 'fk_application_applicant_application_company_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_title', 'fk_application_applicant_application_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_nationality', 'fk_application_applicant_application_nationality')
                ->references('nationality_id')->on('nationality')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_employment_status', 'fk_application_applicant_application_employment_status')
                ->references('employment_status_id')->on('employment_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_applicants');
    }
};
