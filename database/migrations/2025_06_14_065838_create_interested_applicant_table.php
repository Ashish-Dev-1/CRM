<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('interested_applicant', function (Blueprint $table) {
            $table->increments('interested_applicant_id');
            $table->integer('interested_applicant_applicant_id')->nullable();
            $table->integer('interested_applicant_property')->nullable();
            $table->text('interested_applicant_notes')->nullable();
            $table->tinyInteger('interested_applicant_status')->default(2);
            $table->text('interested_applicant_status_reason')->nullable();
            $table->dateTime('interested_applicant_date_created')->nullable();
            $table->dateTime('interested_applicant_date_updated')->nullable();
            $table->integer('interested_applicant_created_by')->nullable();
            $table->integer('interested_applicant_updated_by')->nullable();

            // Foreign keys (update table/column names as needed)
            $table->foreign('interested_applicant_applicant_id', 'fk_interested_applicant_applicant')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('interested_applicant_property', 'fk_interested_applicant_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('interested_applicant_created_by', 'fk_interested_applicant_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('interested_applicant_updated_by', 'fk_interested_applicant_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interested_applicant');
    }
};
