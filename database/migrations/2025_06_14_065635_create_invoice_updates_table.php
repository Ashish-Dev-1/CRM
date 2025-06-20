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
        Schema::create('invoice_updates', function (Blueprint $table) {
            $table->increments('invoice_updates_id');
            $table->integer('invoice_updates_invoice_id')->nullable();
            $table->text('invoice_updates_private_notes')->nullable();
            $table->dateTime('invoice_updates_date_created')->nullable();
            $table->integer('invoice_updates_created_by')->nullable();

            // Foreign keys
            $table->foreign('invoice_updates_created_by', 'fk_invoice_updates_invoice_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_updates_invoice_id', 'fk_invoice_updates_invoice_updates_invoice_id')
                ->references('invoice_id')->on('accounts_invoice')
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
        Schema::dropIfExists('invoice_updates');
    }
};
