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
        Schema::create('accounts_invoice_line_description', function (Blueprint $table) {
            $table->tinyInteger('invoice_line_description_id')->primary();
            $table->string('invoice_line_description_name', 255)->nullable();
            $table->tinyInteger('invoice_line_description_sort')->nullable();
            $table->unsignedSmallInteger('invoice_line_nominal_code')->nullable();
            $table->tinyInteger('invoice_line_description_category')->nullable();
            $table->decimal('invoice_line_description_amount', 10, 2)->default(0.00);

             // Foreign keys
            $table->foreign('invoice_line_description_category', 'fk_acc_inv_lin_des_inv_lin_des_cat')
                ->references('invoice_line_description_category_id')->on('accounts_invoice_line_description_category');
            $table->foreign('invoice_line_nominal_code', 'fk_accounts_invoice_line_description_invoice_line_nomin')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_line_description');
    }
};