<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_template', function (Blueprint $table) {
            $table->integer('email_template_id')->primary();
            $table->string('email_template_name', 255)->nullable();
            $table->tinyInteger('email_template_category')->nullable();
            $table->text('email_template_to')->nullable();
            $table->text('email_template_cc')->nullable();
            $table->text('email_template_bcc')->nullable();
            $table->string('email_template_subject', 255)->nullable();
            $table->text('email_template_body')->nullable();
            $table->dateTime('email_template_date_created')->nullable();
            $table->dateTime('email_template_date_updated')->nullable();
            $table->integer('email_template_created_by')->nullable();
            $table->integer('email_template_updated_by')->nullable();
           
            $table->foreign('email_template_created_by', 'fk_email_template_email_template_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('email_template_updated_by', 'fk_email_template_email_template_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('email_template_category', 'fk_email_template_email_template_category')
                ->references('email_template_category_id')->on('email_template_category')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_template');
    }
};
