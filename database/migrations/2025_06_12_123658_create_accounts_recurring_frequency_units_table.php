<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsRecurringFrequencyUnitTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_recurring_frequency_unit', function (Blueprint $table) {
            $table->tinyInteger('recurring_frequency_unit_id')->primary();
            $table->string('recurring_frequency_unit_name', 20)->nullable();
            $table->tinyInteger('recurring_frequency_unit_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_recurring_frequency_unit');
    }
}