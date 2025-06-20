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
        Schema::create('accounts_bacs_file', function (Blueprint $table) {
            $table->integer('bacs_file_id')->primary();
            $table->string('bacs_file_destination_sort_code', 6)->nullable();
            $table->string('bacs_file_destination_account_number', 8)->nullable();
            $table->char('bacs_file_destination_account_type', 1)->default(' ');
            $table->string('bacs_file_bacs_code', 2)->default('99');
            $table->string('bacs_file_debit_sort_code', 6)->nullable();
            $table->string('bacs_file_debit_account_number', 8)->nullable();
            $table->string('bacs_file_free_format_text', 4)->default('    ');
            $table->string('bacs_file_amount_pence', 11)->nullable();
            $table->decimal('bacs_file_amount', 10, 2)->nullable();
            $table->string('bacs_file_originator_name', 18);
            $table->string('bacs_file_reference', 18)->nullable();
            $table->integer('bacs_file_invoice_payment_reference')->nullable();
            $table->integer('bacs_file_landlord_payment_reference')->nullable();
            $table->string('bacs_file_destination_account_name', 18)->nullable();
            $table->string('bacs_file_processing_date', 6)->default('      ');
            $table->integer('bacs_file_directory_id')->nullable();
            $table->date('bacs_file_payment_date')->nullable();
            $table->tinyInteger('bacs_file_disbursement_DEL')->nullable();
            $table->smallInteger('bacs_file_nominal_code')->nullable();
            $table->tinyInteger('bacs_file_vat_rate')->nullable();
            $table->decimal('bacs_file_vat_amount', 10, 2)->nullable();
            $table->boolean('bacs_file_exported')->default(2);
            $table->dateTime('bacs_file_date_created')->nullable();
            $table->integer('bacs_file_created_by')->nullable();

            // Foreign keys
            $table->foreign('bacs_file_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bacs_file_directory_id')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bacs_file_invoice_payment_reference')
                ->references('invoice_id')->on('accounts_invoice')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bacs_file_landlord_payment_reference')
                ->references('landlord_payment_id')->on('accounts_landlord_payment')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bacs_file_nominal_code')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bacs_file_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rate')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_bacs_file');
    }
};