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
        Schema::create('interested_applicant_updates', function (Blueprint $table) {
            $table->increments('interested_applicant_updates_id');
            $table->integer('interested_applicant_updates_interested_applicant_id')->nullable();
            $table->text('interested_applicant_updates_private_notes')->nullable();
            $table->dateTime('interested_applicant_updates_date_created')->nullable();
            $table->integer('interested_applicant_updates_created_by')->nullable();

            // Foreign keys
            $table->foreign('interested_applicant_updates_interested_applicant_id', 'fk_interested_applicant_updates_interested_applicant_up')
                ->references('applicant_id')->on('applicants')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('interested_applicant_updates_created_by', 'fk_interested_applicant_updates_interested_applicant_up_1')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interested_applicant_updates');
    }
};
