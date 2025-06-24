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
        Schema::create('task', function (Blueprint $table) {
            $table->integer('task_id')->primary();
            $table->text('task_description');
            $table->date('task_date_tbc')->nullable();
            $table->date('task_deadline')->nullable();
            $table->tinyInteger('task_routine')->nullable();
            $table->tinyInteger('task_status')->nullable();
            $table->smallInteger('task_sort')->nullable();
            $table->dateTime('task_date_created')->nullable();
            $table->integer('task_created_by')->nullable();

            $table->foreign('task_created_by', 'fk_task_task_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('task_status', 'fk_task_task_status')
                ->references('task_status_id')->on('task_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
