<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_task_defaults', function (Blueprint $table) {
            $table->smallIncrements('valuation_task_defaults_id');
            $table->tinyInteger('valuation_task_defaults_type')->nullable();
            $table->string('valuation_task_defaults_name', 100)->nullable();
            $table->tinyInteger('valuation_task_defaults_status')->nullable();
            $table->text('valuation_task_defaults_notes')->nullable();
            $table->text('valuation_task_defaults_description')->nullable();
            $table->tinyInteger('valuation_task_defaults_sort')->nullable();

            $table->foreign('valuation_task_defaults_status', 'fk_valuation_task_defaults_valuation_task_defaults_status')
                ->references('valuation_task_status_id')->on('valuation_task_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_task_defaults');
    }
};
