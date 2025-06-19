<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('keys_transaction_delet', function (Blueprint $table) {
            $table->increments('keys_transaction_id');
            $table->integer('keys_transaction_property')->nullable();
            $table->tinyInteger('keys_transaction_quantity')->nullable();
            $table->string('keys_transaction_to_person', 100)->nullable();
            $table->integer('keys_transaction_to')->nullable();
            $table->dateTime('keys_transaction_out')->nullable();
            $table->dateTime('keys_transaction_due_in')->nullable();
            $table->dateTime('keys_transaction_in')->nullable();
            $table->text('keys_transaction_notes')->nullable();
            $table->tinyInteger('keys_transaction_status')->nullable();
            $table->dateTime('keys_transaction_date_created')->nullable();
            $table->dateTime('keys_transaction_date_updated')->nullable();
            $table->integer('keys_transaction_created_by')->nullable();
            $table->integer('keys_transaction_updated_by')->nullable();

            // Foreign keys
            $table->foreign('keys_transaction_created_by', 'fk_keys_transaction_delet_keys_transaction_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_property', 'fk_keys_transaction_delet_keys_transaction_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_transaction_updated_by', 'fk_keys_transaction_delet_keys_transaction_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keys_transaction_delet');
    }
};
