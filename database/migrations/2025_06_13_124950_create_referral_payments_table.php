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
        Schema::create('referral_payments', function (Blueprint $table) {
            $table->id('referral_payments_id'); // int(11) PRIMARY KEY
            $table->unsignedBigInteger('referral_payments_referral_id')->nullable();
            $table->decimal('referral_payments_amount', 10, 2)->nullable();
            $table->date('referral_payments_date_paid')->nullable();
            $table->dateTime('referral_payments_date_created')->nullable();
            $table->dateTime('referral_payments_date_updated')->nullable();
            $table->integer('referral_payments_created_by')->nullable();
            $table->integer('referral_payments_updated_by')->nullable();
            $table->foreign('referral_payments_created_by', 'fk_referral_payments_referral_payments_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_referral_id', 'fk_referral_payments_referral_payments_referral_id')
                ->references('referral_id')->on('referral')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_payments_updated_by', 'fk_referral_payments_referral_payments_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_payments');
    }
};
