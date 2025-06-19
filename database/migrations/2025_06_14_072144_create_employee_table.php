<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('company_id')->nullable();
            $table->integer('employee_id')->primary();
            $table->string('employee_token', 40)->nullable();
            $table->tinyInteger('employee_title')->nullable();
            $table->string('employee_first_name', 255)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
            $table->string('employee_surname', 255)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
            $table->string('employee_mobile_number', 255)->nullable();
            $table->string('employee_mobile_number_work', 255)->nullable();
            $table->string('employee_direct_line', 255)->nullable();
            $table->string('employee_internal_extension', 20)->nullable();
            $table->string('employee_email_address', 255)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
            $table->string('employee_email_address_personal', 255)->nullable();
            $table->string('employee_job_title', 100)->nullable();
            $table->integer('employee_branch_id')->nullable();
            $table->integer('employee_default_vehicle_id')->nullable();
            $table->string('employee_username', 255)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
            $table->string('employee_password', 255)->nullable();
            $table->tinyInteger('employee_status')->nullable();
            $table->boolean('employee_payroll_status')->default(1);
            $table->boolean('employee_login_status')->default(1);
            $table->date('employee_dob')->nullable();
            $table->tinyInteger('employee_first_login_log')->nullable();
            $table->integer('employee_line_manager')->nullable();
            $table->integer('employee_line_manager_annual_leave')->nullable();
            $table->integer('employee_line_manager_first_login')->nullable();
            $table->string('employee_email_password', 255)->nullable();
            $table->decimal('employee_holiday_allowance', 5, 2)->nullable();
            $table->tinyInteger('employee_negotiator_percentage_split')->nullable();
            $table->string('employee_lunch_break', 150)->nullable();
            $table->tinyInteger('employee_lunch_break_minutes')->nullable();
            $table->integer('employee_annual_leave_cover')->nullable();
            $table->text('employee_working_hours')->nullable();
            $table->date('employee_start_date')->nullable();
            $table->decimal('employee_average_hours_worked_per_week', 4, 2)->nullable();
            $table->decimal('employee_average_days_worked_per_week', 2, 1)->nullable();
            $table->tinyInteger('employee_annual_leave_active')->default(1);
            $table->tinyInteger('employee_annual_leave_accrual_method')->default(1);
            $table->string('employee_hostname', 50)->nullable();
            $table->string('employee_image_filename', 255)->nullable();
            $table->boolean('employee_email_default_new_valuation_arranged')->default(1);
            // Foreign keys
            $table->foreign('employee_branch_id', 'fk_employee_employee_branch_id')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_default_vehicle_id', 'fk_employee_employee_default_vehicle_id')
                ->references('vehicle_id')->on('vehicle')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_title', 'fk_employee_employee_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('company_id', 'fk_employee_company_id')
                ->references('company_id')->on('company')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_line_manager', 'fk_employee_line_manager')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_line_manager_annual_leave', 'fk_employee_line_manager_annual_leave')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_line_manager_first_login', 'fk_employee_line_manager_first_login')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_annual_leave_cover', 'fk_employee_annual_leave_cover')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_annual_leave_accrual_method', 'fk_employee_employee_annual_leave_accrual_method')
                ->references('annual_leave_accrual_method_id')->on('annual_leave_accrual_method')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
