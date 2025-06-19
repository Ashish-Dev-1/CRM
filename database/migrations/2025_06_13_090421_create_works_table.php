<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id('works_id');
            $table->unsignedInteger('works_property')->nullable();
            $table->unsignedInteger('works_development')->nullable();
            $table->tinyInteger('works_category')->nullable();
            $table->unsignedInteger('works_contractor')->nullable();
            $table->text('works_description')->nullable();
            $table->text('works_outcome')->nullable();
            $table->text('works_notes')->nullable();
            $table->text('works_private_notes')->nullable();
            $table->text('works_cancellation_reason')->nullable();
            $table->text('works_contractor_quote')->nullable();
            $table->decimal('works_contractor_cost', 10, 2)->nullable();
            $table->string('works_agency_invoice_id', 50)->nullable();
            $table->tinyInteger('works_status')->nullable();
            $table->tinyInteger('works_room')->nullable();
            $table->tinyInteger('works_reminders')->default(1);
            $table->dateTime('works_date_created')->nullable();
            $table->dateTime('works_date_updated')->nullable();
            $table->dateTime('works_date_last_instructed')->nullable();
            $table->dateTime('works_date_last_awaiting_landlord_approval')->nullable();
            $table->dateTime('works_date_last_awaiting_landlord_payment')->nullable();
            $table->dateTime('works_date_last_pending')->nullable();
            $table->unsignedInteger('works_created_by')->nullable();
            $table->unsignedInteger('works_updated_by')->nullable();

            $table->foreign('works_created_by', 'fk_works_works_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_development', 'fk_works_works_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_property', 'fk_works_works_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_updated_by', 'fk_works_works_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_category', 'fk_works_works_category')
                ->references('works_category_id')->on('works_category')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_contractor', 'fk_works_works_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_status', 'fk_works_works_status')
                ->references('works_status_id')->on('works_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_room', 'fk_works_works_room')
                ->references('works_room_id')->on('works_room')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
