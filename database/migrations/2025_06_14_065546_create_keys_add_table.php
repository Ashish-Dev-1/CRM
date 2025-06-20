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
        Schema::create('keys_add', function (Blueprint $table) {
            $table->increments('keys_add_id');
            $table->integer('keys_add_property')->nullable();
            $table->tinyInteger('keys_add_from')->nullable();
            $table->tinyInteger('keys_add_quantity')->nullable();
            $table->text('keys_add_notes')->nullable();
            $table->dateTime('keys_add_date_created')->nullable();
            $table->dateTime('keys_add_date_updated')->nullable();
            $table->integer('keys_add_created_by')->nullable();
            $table->integer('keys_add_updated_by')->nullable();

            // Foreign keys
            $table->foreign('keys_add_created_by', 'fk_keys_add_keys_add_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_add_property', 'fk_keys_add_keys_add_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_add_updated_by', 'fk_keys_add_keys_add_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('keys_add_from', 'fk_keys_add_keys_add_from')
                ->references('keys_add_from_id')->on('keys_add_from')
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
        Schema::dropIfExists('keys_add');
    }
};
