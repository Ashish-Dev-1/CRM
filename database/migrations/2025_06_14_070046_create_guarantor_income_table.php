<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guarantor_income', function (Blueprint $table) {
            $table->increments('guarantor_income_id');
            $table->integer('guarantor_income_guarantor_id')->nullable()->default(null);
            $table->decimal('guarantor_income_amount', 10, 2)->nullable()->default(null);
            $table->tinyInteger('guarantor_income_frequency')->nullable()->default(null);
            $table->string('guarantor_income_source', 255)->nullable()->default(null);

            $table->foreign('guarantor_income_guarantor_id', 'fk_guarantor_income_guarantor_income_guarantor_id')
                ->references('guarantor_id')->on('guarantor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('guarantor_income_frequency', 'fk_guarantor_income_guarantor_income_frequency')
                ->references('income_frequency_id')->on('income_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guarantor_income');
    }
};
