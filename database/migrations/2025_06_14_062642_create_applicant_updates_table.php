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
        Schema::create('applicant_updates', function (Blueprint $table) {
            $table->integer('applicant_updates_id')->primary();
            $table->integer('applicant_updates_applicant_id')->nullable();
            $table->text('applicant_updates_public_notes')->nullable();
            $table->text('applicant_updates_private_notes')->nullable();
            $table->tinyInteger('applicant_updates_notify_applicant')->nullable();
            $table->dateTime('applicant_updates_date_created')->nullable();
            $table->integer('applicant_updates_created_by')->nullable();
             // Foreign keys
            $table->foreign('applicant_updates_applicant_id', 'fk_applicant_updates_applicant_updates_applicant_id')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('applicant_updates_created_by', 'fk_applicant_updates_applicant_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_updates');
    }
};
