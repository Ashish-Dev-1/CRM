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
        Schema::create('guarantor', function (Blueprint $table) {
            $table->integer('guarantor_id')->primary();
            $table->tinyInteger('guarantor_title')->nullable();
            $table->string('guarantor_first_name', 30)
                  
                  
                  ->nullable();
            $table->string('guarantor_surname', 30)
                  
                  
                  ->nullable();
            $table->string('guarantor_phone_home', 255)->nullable();
            $table->string('guarantor_phone_work', 255)->nullable();
            $table->string('guarantor_phone_mobile', 255)->nullable();
            $table->string('guarantor_fax', 20)
                  
                  
                  ->nullable();
            $table->string('guarantor_email', 255)
                  
                  
                  ->nullable();
            $table->string('guarantor_property_number_name', 50)
                  
                  
                  ->nullable();
            $table->string('guarantor_apartment_number_name', 50)
                  
                  
                  ->nullable();
            $table->string('guarantor_address_line_1', 255)
                  
                  
                  ->nullable();
            $table->string('guarantor_address_line_2', 255)
                  
                  
                  ->nullable();
            $table->string('guarantor_suburb', 255)->nullable();
            $table->string('guarantor_town_city', 255)->nullable();
            $table->string('guarantor_postcode', 8)
                  
                  
                  ->nullable();
            $table->integer('guarantor_country')->nullable();
            $table->date('guarantor_dob')->nullable();
            $table->string('guarantor_passport_number', 10)
                  
                  
                  ->nullable();
            $table->text('guarantor_notes')
                  
                  
                  ->nullable();
            $table->tinyInteger('guarantor_bank_name')->nullable();
            $table->string('guarantor_bank_sort_code', 8)
                  
                  
                  ->nullable();
            $table->string('guarantor_bank_account_number', 8)
                  
                  
                  ->nullable();
            $table->string('guarantor_bank_account_name', 100)
                  
                  
                  ->nullable();
            $table->dateTime('guarantor_date_created')->nullable();
            $table->dateTime('guarantor_date_updated')->nullable();
            $table->integer('guarantor_created_by')->nullable();
            $table->integer('guarantor_updated_by')->nullable();
            $table->string('guarantor_online_login_username', 255)->nullable();
            $table->string('guarantor_online_login_password', 255)->nullable();
            $table->string('guarantor_nino', 13)->nullable();
            $table->tinyInteger('guarantor_employment_status')->nullable();
            $table->string('guarantor_employer_name', 255)->nullable();
            $table->string('guarantor_driving_licence_number', 20)->nullable();
            $table->decimal('guarantor_income', 9, 2)->nullable();
            $table->tinyInteger('guarantor_income_frequency')->nullable();
            $table->text('guarantor_income_notes')->nullable();
            $table->tinyInteger('guarantor_online_account')->nullable();
            $table->integer('guarantor_referencing_provider')->nullable();
            $table->string('guarantor_referencing_provider_reference', 20)->nullable();
            $table->integer('guarantor_branch')->nullable();
             // Foreign keys
            $table->foreign('guarantor_bank_name', 'fk_guarantor_guarantor_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_branch', 'fk_guarantor_guarantor_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_created_by', 'fk_guarantor_guarantor_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_title', 'fk_guarantor_guarantor_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_updated_by', 'fk_guarantor_guarantor_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_country', 'fk_guarantor_guarantor_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_employment_status', 'fk_guarantor_guarantor_employment_status')
                ->references('employment_status_id')->on('employment_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_referencing_provider', 'fk_guarantor_guarantor_referencing_provider')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantor');
    }
};
