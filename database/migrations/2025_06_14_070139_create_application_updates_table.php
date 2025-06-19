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
        Schema::create('application_updates', function (Blueprint $table) {
            $table->integer('application_updates_id')->primary();
            $table->integer('application_updates_application_id')->nullable();
            $table->text('application_updates_public_notes')->nullable();
            $table->text('application_updates_private_notes')->nullable();
            $table->tinyInteger('application_updates_notify_landlord')->nullable();
            $table->tinyInteger('application_updates_notify_applicant')->nullable();
            $table->dateTime('application_updates_date_created')->nullable();
            $table->integer('application_updates_created_by')->nullable();
            // Foreign keys
            $table->foreign('application_updates_created_by', 'fk_application_updates_application_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('application_updates_application_id', 'fk_application_updates_application_updates_application_id')
                ->references('application_id')->on('application')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_updates');
    }
};
