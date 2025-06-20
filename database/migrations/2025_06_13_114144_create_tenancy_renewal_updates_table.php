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
        Schema::create('tenancy_renewal_updates', function (Blueprint $table) {
            $table->integer('tenancy_renewal_updates_id')->primary();
            $table->integer('tenancy_renewal_updates_tenancy_id')->nullable();
            $table->text('tenancy_renewal_updates_public_notes')->nullable();
            $table->text('tenancy_renewal_updates_private_notes')->nullable();
            $table->tinyInteger('tenancy_renewal_updates_notify_landlord')->nullable();
            $table->tinyInteger('tenancy_renewal_updates_notify_tenants')->nullable();
            $table->tinyInteger('tenancy_renewal_updates_notify_accounts')->nullable();
            $table->dateTime('tenancy_renewal_updates_date_created')->nullable();
            $table->integer('tenancy_renewal_updates_created_by')->nullable();

            $table->foreign('tenancy_renewal_updates_created_by', 'fk_tenancy_renewal_updates_tenancy_renewal_updates_crea')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_renewal_updates_tenancy_id', 'fk_tenancy_renewal_updates_tenancy_renewal_updates_tena')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_renewal_updates');
    }
};
