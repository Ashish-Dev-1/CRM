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
        Schema::create('referral', function (Blueprint $table) {
            $table->id('referral_id'); // int(11) PRIMARY KEY
            $table->tinyInteger('referral_type')->nullable();
            $table->tinyInteger('referral_sale_purchase')->nullable();
            $table->tinyInteger('referral_customer_type')->nullable();
            $table->integer('referral_customer')->nullable();
            $table->string('referral_customer_email', 255)->nullable();
            $table->integer('referral_directory_company')->nullable();
            $table->integer('referral_property')->nullable();
            $table->integer('referral_valuation')->nullable();
            $table->text('referral_notes')->nullable();
            $table->text('referral_notes_private')->nullable();
            $table->text('referral_notes_directory_company')->nullable();
            $table->integer('referral_employee')->nullable();
            $table->integer('referral_status')->nullable();
            $table->string('referral_commission_our_invoice_ref', 50)->nullable();
            $table->decimal('referral_commission_amount', 10, 2)->nullable();
            $table->date('referral_commission_date_paid')->nullable();
            $table->decimal('referral_total_amount_paid', 10, 2)->default(0.00);
            $table->tinyInteger('referral_total_number_of_payments')->default(0);
            $table->decimal('referral_total_amount_paid_employee', 10, 2)->default(0.00);
            $table->tinyInteger('referral_total_number_of_payments_employee')->default(0);
            $table->dateTime('referral_date_created')->nullable();
            $table->dateTime('referral_date_updated')->nullable();
            $table->integer('referral_created_by')->nullable();
            $table->integer('referral_updated_by')->nullable();

            $table->foreign('referral_created_by', 'fk_referral_referral_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_employee', 'fk_referral_referral_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_property', 'fk_referral_referral_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_updated_by', 'fk_referral_referral_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_valuation', 'fk_referral_referral_valuation')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_type', 'fk_referral_referral_type')
                ->references('referral_type_id')->on('referral_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_sale_purchase', 'fk_referral_referral_sale_purchase')
                ->references('referral_sale_purchase_id')->on('referral_sale_purchase')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_customer_type', 'fk_referral_referral_customer_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_directory_company', 'fk_referral_referral_directory_company')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_status', 'fk_referral_referral_status')
                ->references('referral_status_id')->on('referral_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral');
    }
};
