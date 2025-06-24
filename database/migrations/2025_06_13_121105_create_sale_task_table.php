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
        Schema::create('sale_task', function (Blueprint $table) {
            $table->integer('sale_task_id')->primary();
            $table->integer('sale_id')->nullable();
            $table->tinyInteger('sale_task_type')->nullable();
            $table->string('sale_task_name', 255)->nullable();
            $table->tinyInteger('sale_task_status')->nullable();
            $table->date('sale_task_target_date')->nullable();
            $table->date('sale_task_completed_date')->nullable();
            $table->text('sale_task_notes')->nullable();
            $table->text('sale_task_notes_private')->nullable();
            $table->tinyInteger('sale_task_sort')->nullable();
            $table->tinyInteger('sale_task_vendor_notified')->nullable();
            $table->tinyInteger('sale_task_buyer_notified')->nullable();
            $table->dateTime('sale_task_date_updated')->nullable();
            $table->integer('sale_task_updated_by')->nullable();

            $table->foreign('sale_task_updated_by', 'fk_sale_task_sale_task_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            // Foreign key constraint for sale_id removed due to migration order issue
            $table->foreign('sale_task_type', 'fk_sale_task_sale_task_type')
                ->references('sale_task_type_id')->on('sale_task_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_task_status', 'fk_sale_task_sale_task_status')
                ->references('sale_task_status_id')->on('sale_task_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_task');
    }
};
