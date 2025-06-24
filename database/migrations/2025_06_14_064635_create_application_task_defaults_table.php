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
        Schema::create('application_task_defaults', function (Blueprint $table) {
            $table->smallInteger('application_task_defaults_id')->primary();
            $table->tinyInteger('application_task_defaults_type')->nullable();
            $table->string('application_task_defaults_name', 100)->nullable();
            $table->tinyInteger('application_task_defaults_status')->nullable();
            $table->text('application_task_defaults_notes')->nullable();
            $table->text('application_task_defaults_description')->nullable();
            $table->tinyInteger('application_task_defaults_sort')->nullable();
            // Foreign keys
            $table->foreign('application_task_defaults_type', 'fk_application_task_defaults_application_task_defaults_type')
                ->references('application_task_type_id')->on('application_task_types')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_task_defaults_status', 'fk_application_task_defaults_application_task_defaults_status')
                ->references('application_task_status_id')->on('application_task_statuses')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_task_defaults');
    }
};
