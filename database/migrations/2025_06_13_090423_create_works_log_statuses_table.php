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
        Schema::create('works_log_status', function (Blueprint $table) {
            $table->id('works_log_status_id');
            $table->unsignedBigInteger('works_id')->nullable();
            $table->unsignedBigInteger('works_status_old')->nullable();
            $table->unsignedBigInteger('works_status_new')->nullable();
            $table->integer('works_updated_by')->nullable();
            $table->dateTime('works_date_updated')->nullable();

             $table->foreign('works_updated_by', 'fk_works_log_status_works_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_id', 'fk_works_log_status_works_id')
                ->references('works_id')->on('works')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('works_status_old', 'fk_works_status_old')
                ->references('works_status_id')->on('works_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_status_new', 'fk_works_status_new')
                ->references('works_status_id')->on('works_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works_log_status');
    }
};
