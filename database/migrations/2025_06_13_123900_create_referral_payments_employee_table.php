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
        Schema::create('referral_payments_employee', function (Blueprint $table) {
            $table->id('referral_payments_employee_id'); // int(11) PRIMARY KEY
            $table->integer('referral_payments_employee_referral_id')->nullable();
            $table->tinyInteger('referral_payments_employee_payment_type')->nullable();
            $table->integer('referral_payments_employee_employee_id')->nullable();
            $table->decimal('referral_payments_employee_amount', 10, 2)->nullable();
            $table->date('referral_payments_employee_date_paid')->nullable();
            $table->dateTime('referral_payments_employee_date_created')->nullable();
            $table->dateTime('referral_payments_employee_date_updated')->nullable();
            $table->integer('referral_payments_employee_created_by')->nullable();
            $table->integer('referral_payments_employee_updated_by')->nullable();

            // Note: The following FK is unusual, as it links the PK to employee_id.
            // Normally, you'd link referral_payments_employee_employee_id to employee.employee_id.
            $table->foreign('referral_payments_employee_id', 'fk_referral_payments_employee_referral_payments_employe')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_employee_referral_id', 'fk_referral_payments_employee_referral_payments_employe_1')
                ->references('referral_id')->on('referral')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_employee_employee_id', 'fk_referral_payments_employee_referral_payments_employe_2')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_employee_created_by', 'fk_referral_payments_employee_referral_payments_employe_3')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_employee_updated_by', 'fk_referral_payments_employee_referral_payments_employe_4')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_payments_employee');
    }
};
