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
        Schema::create('employee_login_log', function (Blueprint $table) {
            $table->integer('employee_login_log_id')->primary();
            $table->integer('employee_login_log_employee_id')->nullable();
            $table->dateTime('employee_login_log_start_date_time')->nullable();
            $table->dateTime('employee_login_log_date_time')->nullable();
            $table->smallInteger('employee_login_log_minutes_late')->nullable();
            $table->string('employee_login_log_ip_address', 45)->nullable();
            $table->text('employee_login_log_notes')->nullable();
            $table->tinyInteger('employee_login_log_active')->default(1);
            $table->dateTime('employee_login_log_date_updated')->useCurrent();
            $table->integer('employee_login_log_updated_by')->nullable();
            
            $table->foreign('employee_login_log_employee_id', 'fk_employee_login_log_employee_login_log_employee_id')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_login_log_updated_by', 'fk_employee_login_log_employee_login_log_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_login_log');
    }
};
