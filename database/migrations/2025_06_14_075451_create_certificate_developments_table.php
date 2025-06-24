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
        Schema::create('certificate_developments', function (Blueprint $table) {
            $table->integer('certificate_id', true);
            $table->integer('certificate_development')->nullable();
            $table->tinyInteger('certificate_type')->nullable();
            $table->string('certificate_reference', 255)->nullable();
            $table->string('certificate_rating', 4)->nullable();
            $table->date('certificate_start_date')->nullable();
            $table->date('certificate_expiry_date')->nullable();
            $table->text('certificate_notes')->nullable();
            $table->text('certificate_notes_private')->nullable();
            $table->integer('certificate_renewal_contractor')->nullable();
            $table->tinyInteger('certificate_renewal_instructed')->nullable();
            $table->dateTime('certificate_renewal_last_instructed')->nullable();
            $table->dateTime('certificate_date_created')->nullable();
            $table->integer('certificate_created_by')->nullable();
            
            // Add foreign key constraints
             $table->foreign('certificate_created_by', 'fk_certificate_development_certificate_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('certificate_development', 'fk_certificate_development_certificate_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('certificate_type', 'fk_certificate_development_certificate_type')
                ->references('certificate_type_id')->on('certificate_types')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('certificate_renewal_contractor', 'fk_certificate_development_certificate_renewal_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_developments');
    }
};
