<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->integer('directory_id')->primary();
            $table->integer('directory_category')->nullable();
            $table->string('directory_company_name')->nullable();
            $table->string('directory_branch_name', 100)->nullable();
            $table->string('directory_contact_name')->nullable();
            $table->string('directory_phone_work')->nullable();
            $table->string('directory_phone_mobile')->nullable();
            $table->string('directory_fax', 20)->nullable();
            $table->string('directory_email')->nullable();
            $table->string('directory_website')->nullable();
            $table->string('directory_dx', 50)->nullable();
            $table->string('directory_property_number_name', 50)->nullable();
            $table->string('directory_apartment_number_name', 50)->nullable();
            $table->string('directory_address_line_1')->nullable();
            $table->string('directory_address_line_2')->nullable();
            $table->string('directory_suburb')->nullable();
            $table->string('directory_town_city')->nullable();
            $table->string('directory_postcode', 8)->nullable();
            $table->integer('directory_country')->nullable();
            $table->tinyInteger('directory_bank_name')->nullable();
            $table->string('directory_bank_sort_code', 8)->nullable();
            $table->string('directory_bank_account_number', 8)->nullable();
            $table->string('directory_bank_account_name', 100)->nullable();
            $table->integer('directory_status')->nullable();
            $table->text('directory_notes')->nullable();
            $table->dateTime('directory_date_created')->nullable();
            $table->dateTime('directory_date_updated')->nullable();
            $table->integer('directory_created_by')->nullable();
            $table->integer('directory_updated_by')->nullable();
            $table->tinyInteger('directory_commission_scheme')->nullable();
            $table->decimal('directory_commission_percentage', 5, 2)->nullable();
            $table->tinyInteger('directory_payment_terms')->nullable();
            $table->unsignedInteger('directory_landlord_contractor')->nullable();
            $table->unsignedSmallInteger('directory_nominal_code')->nullable();
            $table->unsignedTinyInteger('directory_vat_rate')->nullable();
            $table->tinyInteger('directory_accounts_purposes_only')->default(2);

            $table->foreign('directory_bank_name', 'fk_directory_directory_bank_name')
                ->references('bank_id')->on('banks')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_country', 'fk_directory_directory_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_created_by', 'fk_directory_directory_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_nominal_code', 'fk_directory_directory_nominal_code')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_updated_by', 'fk_directory_directory_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_vat_rate', 'fk_directory_directory_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rates')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_category', 'fk_directory_directory_category')
                ->references('directory_category_id')->on('directory_category')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_payment_terms', 'fk_directory_directory_payment_terms')
                ->references('accounts_payment_term_id')->on('accounts_payment_term')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_landlord_contractor', 'fk_directory_directory_landlord_contractor')
                ->references('landlord_id')->on('landlord')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_commission_scheme', 'fk_directory_directory_commission_scheme')
                ->references('directory_commission_scheme_id')->on('directory_commission_scheme')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_status', 'fk_directory_directory_status')
                ->references('directory_status_id')->on('directory_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory');
    }
};
