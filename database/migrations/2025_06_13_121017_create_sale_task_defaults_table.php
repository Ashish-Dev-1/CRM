<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sale_task_defaults', function (Blueprint $table) {
            $table->smallInteger('sale_task_defaults_id')->primary();
            $table->tinyInteger('sale_task_defaults_type')->nullable();
            $table->string('sale_task_defaults_name', 100)->nullable();
            $table->tinyInteger('sale_task_defaults_status')->nullable();
            $table->text('sale_task_defaults_notes')->nullable();
            $table->text('sale_task_defaults_description')->nullable();
            $table->tinyInteger('sale_task_defaults_sort')->nullable();

            $table->foreign('sale_task_defaults_type', 'fk_sale_task_defaults_sale_task_defaults_type')
                ->references('sale_task_type_id')->on('sale_task_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_task_defaults_status', 'fk_sale_task_defaults_sale_task_defaults_status')
                ->references('sale_task_status_id')->on('sale_task_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sale_task_defaults');
    }
};
