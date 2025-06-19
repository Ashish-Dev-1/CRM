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
        Schema::create('applicant_requirement_feedback', function (Blueprint $table) {
            $table->integer('applicant_requirement_feedback_id')->primary();
            $table->integer('applicant_requirement_feedback_ar_id')->nullable();
            $table->integer('applicant_requirement_feedback_arp_id')->nullable();
            $table->text('applicant_requirement_feedback_public_notes')->nullable();
            $table->integer('applicant_requirement_feedback_ptp')->nullable();
            $table->text('applicant_requirement_feedback_private_notes')->nullable();
            $table->text('applicant_requirement_feedback_next_review_date')->nullable();
            $table->dateTime('applicant_requirement_feedback_date_created')->nullable();
            $table->dateTime('applicant_requirement_feedback_date_updated')->nullable();
            $table->integer('applicant_requirement_feedback_created_by')->nullable();
            $table->integer('applicant_requirement_feedback_updated_by')->nullable();
            // Foreign keys
            $table->foreign('applicant_requirement_feedback_created_by', 'fk_applicant_requirement_feedback_applicant_requirement')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_requirement_feedback_updated_by', 'fk_applicant_requirement_feedback_applicant_requirement_1')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_requirement_feedback_arp_id', 'fk_applicant_requirement_feedback_applicant_requirement_feedb_1')
                ->references('arp_id')->on('applicant_requirement_properties')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_requirement_feedback_ar_id', 'fk_applicant_requirement_feedback_applicant_requirement_feedbac')
                ->references('ar_id')->on('applicant_requirement')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirement_feedback');
    }
};
