<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenancy_updates', function (Blueprint $table) {
            $table->id('tenancy_updates_id');
            $table->integer('tenancy_updates_tenancy_id')->nullable();
            $table->text('tenancy_updates_public_notes')->nullable();
            $table->text('tenancy_updates_private_notes')->nullable();
            $table->tinyInteger('tenancy_updates_notify_tenants')->nullable();
            $table->tinyInteger('tenancy_updates_notify_landlord')->nullable();
            $table->tinyInteger('tenancy_updates_notify_accounts')->nullable();
            $table->dateTime('tenancy_updates_date_created')->nullable();
            $table->integer('tenancy_updates_created_by')->nullable();

            $table->foreign('tenancy_updates_created_by', 'fk_tenancy_updates_tenancy_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_updates_tenancy_id', 'fk_tenancy_updates_tenancy_updates_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_updates');
    }
};
