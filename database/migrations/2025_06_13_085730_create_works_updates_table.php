<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('works_updates', function (Blueprint $table) {
            $table->id('works_updates_id');
            $table->unsignedInteger('works_updates_works_id')->nullable();
            $table->text('works_updates_public_notes')->nullable();
            $table->text('works_updates_private_notes')->nullable();
            $table->tinyInteger('works_updates_notify_landlords')->nullable();
            $table->tinyInteger('works_updates_notify_tenants')->nullable();
            $table->tinyInteger('works_updates_notify_contractor')->nullable();
            $table->tinyInteger('works_updates_notify_works_dept')->nullable();
            $table->dateTime('works_updates_date_created')->nullable();
            $table->unsignedInteger('works_updates_created_by')->nullable();

            $table->foreign('works_updates_created_by', 'fk_works_updates_works_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('works_updates_works_id', 'fk_works_updates_works_updates_works_id')
                ->references('works_id')->on('works')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works_updates');
    }
};

