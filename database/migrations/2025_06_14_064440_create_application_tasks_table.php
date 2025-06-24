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
        Schema::create('application_tasks', function (Blueprint $table) {
            $table->integer('application_task_id')->primary();
            $table->integer('application_id')->nullable();
            $table->tinyInteger('application_task_type')->nullable();
            $table->string('application_task_name', 255)->nullable();
            $table->tinyInteger('application_task_status')->nullable();
            $table->date('application_task_completed_date')->nullable();
            $table->text('application_task_notes')->nullable();
            $table->text('application_task_notes_private')->nullable();
            $table->tinyInteger('application_task_sort')->nullable();
            $table->tinyInteger('application_task_landlord_notified')->nullable();
            $table->tinyInteger('application_task_applicant_notified')->nullable();
            $table->dateTime('application_task_date_updated')->nullable();
            $table->integer('application_task_updated_by')->nullable();
            // Foreign keys
            $table->foreign('application_task_updated_by', 'fk_application_task_application_task_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_id', 'fk_application_task_application_id')
                ->references('application_id')->on('applications')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_task_type', 'fk_application_task_application_task_type')
                ->references('application_task_type_id')->on('application_task_types')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_task_status', 'fk_application_task_application_task_status')
                ->references('application_task_status_id')->on('application_task_statuses')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_tasks');
    }
};
