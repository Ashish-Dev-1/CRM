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
        Schema::create('key_transaction_updates', function (Blueprint $table) {
            $table->increments('key_transaction_updates_id');
            $table->integer('key_transaction_updates_keys_transaction_id')->nullable();
            $table->text('key_transaction_updates_private_notes')->nullable();
            $table->dateTime('key_transaction_updates_date_created')->nullable();
            $table->integer('key_transaction_updates_created_by')->nullable();

           

            // Foreign keys
            $table->foreign('key_transaction_updates_created_by', 'fk_key_transaction_updates_key_transaction_updates_crea')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('key_transaction_updates_keys_transaction_id', 'fk_key_transaction_updates_key_transaction_updates_keys_tra')
                ->references('keys_transaction_id')->on('keys_transaction')
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
        Schema::dropIfExists('key_transaction_updates');
    }
};
