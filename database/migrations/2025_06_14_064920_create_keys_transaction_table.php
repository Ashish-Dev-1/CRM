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
        Schema::create('keys_transaction', function (Blueprint $table) {
            $table->increments('keys_transaction_id');
            $table->unsignedInteger('keys_transaction_set_id')->nullable();
            $table->unsignedInteger('keys_transaction_property')->nullable();
            $table->unsignedTinyInteger('keys_transaction_client_type')->nullable();
            $table->integer('keys_transaction_client')->nullable();
            $table->tinyInteger('keys_transaction_quantity')->nullable();
            $table->dateTime('keys_transaction_out')->nullable();
            $table->integer('keys_transaction_employee')->nullable();
            $table->text('keys_transaction_notes')->nullable();
            $table->text('keys_transaction_notes_private')->nullable();
            $table->dateTime('keys_transaction_in')->nullable();
            $table->integer('keys_transaction_in_employee')->nullable();
            $table->tinyInteger('keys_transaction_email_reminders')->nullable()->default(1);
            $table->tinyInteger('keys_transaction_due_back')->nullable();
            $table->dateTime('keys_transaction_date_created')->nullable();
            $table->dateTime('keys_transaction_date_updated')->nullable();
            $table->integer('keys_transaction_created_by')->nullable();
            $table->integer('keys_transaction_updated_by')->nullable();

            // Foreign keys
            $table->foreign('keys_transaction_client_type', 'fk_keys_transaction_keys_transaction_client_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_created_by', 'fk_keys_transaction_keys_transaction_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_employee', 'fk_keys_transaction_keys_transaction_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_in_employee', 'fk_keys_transaction_keys_transaction_in_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_property', 'fk_keys_transaction_keys_transaction_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_updated_by', 'fk_keys_transaction_keys_transaction_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_set_id', 'fk_keys_transaction_keys_transaction_set_id')
                ->references('keys_add_id')->on('keys_add')
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
        Schema::dropIfExists('keys_transaction');
    }
};
