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
        Schema::create('application_log_statuses', function (Blueprint $table) {
            $table->increments('application_log_status_id');
            $table->integer('application_id')->nullable();
            $table->tinyInteger('application_status_old')->nullable();
            $table->tinyInteger('application_status_new')->nullable();
            $table->integer('application_updated_by')->nullable();
            $table->dateTime('application_date_updated')->nullable();
            // Foreign keys
            $table->foreign('application_updated_by', 'fk_application_log_status_application_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_id', 'fk_application_log_status_application_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_status_old', 'fk_application_log_status_application_status_old')
                ->references('application_status_id')->on('application_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_status_new', 'fk_application_log_status_application_status_new')
                ->references('application_status_id')->on('application_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_log_statuses');
    }
};
