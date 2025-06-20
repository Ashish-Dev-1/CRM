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
        Schema::create('landlord_attachments', function (Blueprint $table) {
            $table->increments('landlord_attachments_id');
            $table->integer('landlord_id')->nullable();
            $table->string('landlord_attachments_file_name', 255)->nullable();
            $table->integer('landlord_attachments_file_size')->nullable();
            $table->string('landlord_attachments_caption', 100)->nullable();
            $table->tinyInteger('landlord_attachments_sort')->nullable();
            $table->dateTime('landlord_attachments_date_created')->nullable();
            $table->integer('landlord_attachments_created_by')->nullable();
            $table->integer('landlord_attachments_document_type_id')->nullable();


            // Foreign keys
            $table->foreign('landlord_attachments_created_by', 'fk_landlord_attachments_landlord_attachments_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_id', 'fk_landlord_attachments_landlord_id')
                ->references('landlord_id')->on('landlord')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_attachments_document_type_id', 'fk_landlord_attachments_landlord_attachments_document_type_id')
                ->references('document_type_id')->on('document_type')
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
        Schema::dropIfExists('landlord_attachments');
    }
};
