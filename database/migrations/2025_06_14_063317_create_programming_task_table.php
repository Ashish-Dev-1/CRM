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
        Schema::create('programming_task', function (Blueprint $table) {
            $table->increments('programming_task_id');
            $table->text('programming_task_description')->nullable();
            $table->tinyInteger('programming_task_severity')->nullable();
            $table->integer('programming_task_sort')->nullable();
            $table->unsignedTinyInteger('programming_task_status')->nullable();
            $table->dateTime('programming_task_date_created')->nullable();
            $table->dateTime('programming_task_date_updated')->nullable();
            $table->integer('programming_task_created_by')->nullable();
            $table->integer('programming_task_updated_by')->nullable();
            
            // Foreign keys
            $table->foreign('programming_task_created_by', 'fk_programming_task_programming_task_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('programming_task_updated_by', 'fk_programming_task_programming_task_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('programming_task_status', 'fk_programming_task_programming_task_status')
                ->references('programming_task_status_id')->on('programming_task_status')
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
        Schema::dropIfExists('programming_task');
    }
};
