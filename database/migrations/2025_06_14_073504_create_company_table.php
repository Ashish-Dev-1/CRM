<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->integer('company_id')->primary();
            $table->string('company_token', 40)->nullable();
            $table->string('company_legal_name', 100)->nullable();
            $table->string('company_trading_name', 255)->nullable();
            $table->string('company_registration_number', 10)->nullable();
            $table->tinyInteger('company_default_vat_rate')->nullable();
            $table->string('company_vat_registration_number', 20)->nullable();
            $table->string('company_reg_office_property_number_name', 50)->nullable();
            $table->string('company_reg_office_address_line_1', 255)->nullable();
            $table->string('company_reg_office_address_line_2', 255)->nullable();
            $table->string('company_reg_office_suburb', 255)->nullable();
            $table->string('company_reg_office_town_city', 255)->nullable();
            $table->string('company_reg_office_postcode', 8)->nullable();
            $table->integer('company_reg_office_country')->nullable();
            $table->string('company_property_number_name', 50)->nullable();
            $table->string('company_address_line_1', 255)->nullable();
            $table->string('company_address_line_2', 255)->nullable();
            $table->string('company_suburb', 255)->nullable();
            $table->string('company_town_city', 255)->nullable();
            $table->string('company_postcode', 8)->nullable();
            $table->integer('company_country')->nullable();
            $table->string('company_phone_number', 20)->nullable();
            $table->string('company_fax_number', 20)->nullable();
            $table->string('company_email', 255)->nullable();
            $table->string('company_website', 255)->nullable();
            $table->string('company_website_display', 255)->nullable();
            $table->date('company_lock_date')->nullable();

            $table->foreign('company_default_vat_rate', 'fk_company_company_default_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rate')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('company_reg_office_country', 'fk_company_company_reg_office_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('company_country', 'fk_company_company_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('company');
    }
}
