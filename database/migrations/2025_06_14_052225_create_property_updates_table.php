<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_updates', function (Blueprint $table) {
            $table->integer('property_updates_id')->primary();
            $table->integer('property_updates_property_id')->nullable();
            $table->text('property_updates_notes_public')->nullable();
            $table->text('property_updates_notes_private')->nullable();
            $table->date('property_updates_property_next_review_date')->nullable();
            $table->text('property_updates_property_next_review_notes')->nullable();
            $table->tinyInteger('property_updates_notify_landlord_vendor')->nullable();
            $table->dateTime('property_updates_date_created')->nullable();
            $table->integer('property_updates_created_by')->nullable();

            $table->foreign('property_updates_created_by', 'fk_property_updates_property_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_updates_property_id', 'fk_property_updates_property_updates_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_updates');
    }
};
