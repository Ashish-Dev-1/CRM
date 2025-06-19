<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_task', function (Blueprint $table) {
            $table->increments('valuation_task_id');
            $table->integer('valuation_id')->nullable();
            $table->string('valuation_task_name', 255)->nullable();
            $table->tinyInteger('valuation_task_status')->nullable();
            $table->date('valuation_task_completed_date')->nullable();
            $table->text('valuation_task_notes_private')->nullable();
            $table->tinyInteger('valuation_task_sort')->nullable();
            $table->dateTime('valuation_task_date_updated')->nullable();
            $table->integer('valuation_task_updated_by')->nullable();

            $table->foreign('valuation_task_updated_by', 'fk_valuation_task_valuation_task_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_task_status', 'fk_valuation_task_valuation_task_status')
                ->references('valuation_task_status_id')->on('valuation_task_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_id', 'fk_valuation_task_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_task');
    }
};
