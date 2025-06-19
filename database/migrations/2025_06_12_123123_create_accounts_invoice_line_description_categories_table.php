<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsInvoiceLineDescriptionCategoryTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_invoice_line_description_category', function (Blueprint $table) {
            $table->tinyInteger('invoice_line_description_category_id')->primary();
            $table->string('invoice_line_description_category_name', 30)->nullable();
            $table->tinyInteger('invoice_line_description_category_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_line_description_category');
    }
}