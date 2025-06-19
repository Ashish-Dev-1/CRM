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
        Schema::create('applicant_requirements', function (Blueprint $table) {
            $table->integer('ar_id')->primary();
            $table->string('ar_token', 40)->nullable();
            $table->tinyInteger('ar_active')->nullable();
            $table->integer('ar_applicant_id')->default(0);
            $table->tinyInteger('ar_property_category')->nullable();
            $table->tinyInteger('ar_property_availability')->nullable();
            $table->integer('ar_property_type')->nullable();
            $table->integer('ar_property_min_price')->nullable();
            $table->integer('ar_property_max_price')->nullable();
            $table->tinyInteger('ar_property_min_bedrooms')->nullable();
            $table->tinyInteger('ar_property_max_bedrooms')->nullable();
            $table->tinyInteger('ar_property_furnished')->nullable();
            $table->tinyInteger('ar_property_shared')->nullable();
            $table->tinyInteger('ar_property_student')->nullable();
            $table->text('ar_position')->nullable();
            $table->text('ar_notes')->nullable();
            $table->integer('ar_branch')->nullable();
            $table->dateTime('ar_date_created')->nullable();
            $table->dateTime('ar_date_updated')->nullable();
            $table->integer('ar_created_by')->nullable();
            $table->integer('ar_updated_by')->nullable();

             // Foreign keys
            $table->foreign('ar_applicant_id', 'fk_applicant_requirement_ar_applicant_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_branch', 'fk_applicant_requirement_ar_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_created_by', 'fk_applicant_requirement_ar_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_availability', 'fk_applicant_requirement_ar_property_availability')
                ->references('property_availability_id')->on('property_availability')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_category', 'fk_applicant_requirement_ar_property_category')
                ->references('property_category_id')->on('property_category')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_type', 'fk_applicant_requirement_ar_property_type')
                ->references('property_type_id')->on('property_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_updated_by', 'fk_applicant_requirement_ar_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_furnished', 'fk_applicant_requirement_ar_property_furnished')
                ->references('property_furnished_status_id')->on('property_furnished_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_shared', 'fk_applicant_requirement_ar_property_shared')
                ->references('applicant_requirement_filter_id')->on('applicant_requirement_filter_shared')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ar_property_student', 'fk_applicant_requirement_ar_property_student')
                ->references('applicant_requirement_filter_id')->on('applicant_requirement_filter_student')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirements');
    }
};
