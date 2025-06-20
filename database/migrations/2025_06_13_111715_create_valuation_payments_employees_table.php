<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('valuation_payments_employee', function (Blueprint $table) {
            $table->id('valuation_payments_employee_id');
            $table->integer('valuation_payments_employee_valuation_id')->nullable();
            $table->unsignedTinyInteger('valuation_payments_employee_payment_type')->nullable();
            $table->integer('valuation_payments_employee_employee_id')->nullable();
            $table->decimal('valuation_payments_employee_amount', 10, 2)->nullable();
            $table->date('valuation_payments_employee_date_paid')->nullable();
            $table->dateTime('valuation_payments_employee_date_created')->nullable();
            $table->dateTime('valuation_payments_employee_date_updated')->nullable();
            $table->integer('valuation_payments_employee_created_by')->nullable();
            $table->integer('valuation_payments_employee_updated_by')->nullable();

            $table->foreign('valuation_payments_employee_valuation_id', 'fk_valuation_payments_employee_valuation_payments_emplo_1')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_payments_employee_employee_id', 'fk_valuation_payments_employee_valuation_payments_emplo_2')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_payments_employee_created_by', 'fk_valuation_payments_employee_valuation_payments_emplo_3')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_payments_employee_updated_by', 'fk_valuation_payments_employee_valuation_payments_emplo_4')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_payments_employee_payment_type', 'fk_val_payments_employee_val_payments_employee_payment_type')
                ->references('referral_payment_type_id')->on('referral_payment_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuation_payments_employee');
    }
};
