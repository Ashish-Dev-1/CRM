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
        Schema::create('accounts_landlord_payment', function (Blueprint $table) {
            $table->integer('landlord_payment_id')->primary();
            $table->date('landlord_payment_date')->nullable();
            $table->integer('landlord_payment_tenancy_id')->nullable();
            $table->decimal('landlord_payment_amount', 10, 2)->nullable();
            $table->tinyInteger('landlord_payment_method')->nullable();
            $table->text('landlord_payment_notes')->nullable();
            $table->dateTime('landlord_payment_date_created')->nullable();
            $table->dateTime('landlord_payment_date_updated')->nullable();
            $table->integer('landlord_payment_created_by')->nullable();
            $table->integer('landlord_payment_updated_by')->nullable();

            // Foreign keys
            $table->foreign('landlord_payment_created_by', 'fk_accounts_landlord_payment_landlord_payment_created_b')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_payment_method', 'fk_accounts_landlord_payment_landlord_payment_method')
                ->references('payment_method_id')->on('accounts_payment_method');
            $table->foreign('landlord_payment_tenancy_id', 'fk_accounts_landlord_payment_landlord_payment_tenancy_i')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_payment_updated_by', 'fk_accounts_landlord_payment_landlord_payment_updated_b')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_landlord_payment');
    }
};