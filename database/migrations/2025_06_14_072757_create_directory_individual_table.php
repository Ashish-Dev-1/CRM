<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_individual', function (Blueprint $table) {
            $table->integer('directory_individual_id')->primary();
            $table->integer('directory_individual_company')->nullable();
            $table->tinyInteger('directory_individual_title')->nullable();
            $table->string('directory_individual_first_name', 30)->nullable();
            $table->string('directory_individual_surname', 30)->nullable();
            $table->string('directory_individual_phone_home')->nullable();
            $table->string('directory_individual_phone_work')->nullable();
            $table->string('directory_individual_phone_mobile')->nullable();
            $table->string('directory_individual_fax', 20)->nullable();
            $table->string('directory_individual_email')->nullable();
            $table->string('directory_individual_property_number_name', 50)->nullable();
            $table->string('directory_individual_apartment_number_name', 50)->nullable();
            $table->string('directory_individual_address_line_1')->nullable();
            $table->string('directory_individual_address_line_2')->nullable();
            $table->string('directory_individual_suburb')->nullable();
            $table->string('directory_individual_town_city')->nullable();
            $table->string('directory_individual_postcode', 8)->nullable();
            $table->integer('directory_individual_country')->nullable();
            $table->integer('directory_individual_status')->nullable();
            $table->text('directory_individual_notes')->nullable();
            $table->tinyInteger('directory_individual_bank_name')->nullable();
            $table->string('directory_individual_bank_sort_code', 8)->nullable();
            $table->string('directory_individual_bank_account_number', 8)->nullable();
            $table->string('directory_individual_bank_account_name', 100)->nullable();
            $table->dateTime('directory_individual_date_created')->nullable();
            $table->dateTime('directory_individual_date_updated')->nullable();
            $table->integer('directory_individual_created_by')->nullable();
            $table->integer('directory_individual_updated_by')->nullable();

            $table->foreign('directory_individual_bank_name', 'fk_directory_individual_directory_individual_bank_name')
                ->references('bank_id')->on('bank')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_individual_created_by', 'fk_directory_individual_directory_individual_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_individual_title', 'fk_directory_individual_directory_individual_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_individual_updated_by', 'fk_directory_individual_directory_individual_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_individual_company', 'fk_directory_individual_directory_individual_company')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_individual_status', 'fk_directory_individual_directory_individual_status')
                ->references('directory_status_id')->on('directory_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory_individual');
    }
};
