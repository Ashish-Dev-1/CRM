<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('letting_task', function (Blueprint $table) {
            $table->smallIncrements('letting_task_id');
            $table->integer('tenancy_id')->nullable();
            $table->tinyInteger('letting_task_stage')->nullable();
            $table->string('letting_task_name', 100)->nullable();
            $table->tinyInteger('letting_task_status')->nullable();
            $table->text('letting_task_notes')->nullable();
            $table->date('letting_task_date_completed')->nullable();
            $table->tinyInteger('letting_task_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letting_task');
    }
};
