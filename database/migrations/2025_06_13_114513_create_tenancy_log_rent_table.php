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
        Schema::create('tenancy_log_rent', function (Blueprint $table) {
            $table->integer('tenancy_log_rent_id')->primary();
            $table->integer('tenancy_log_rent_tenancy_id')->nullable();
            $table->decimal('tenancy_rent_old', 11, 2)->nullable();
            $table->decimal('tenancy_rent_new', 11, 2)->nullable();
            $table->text('tenancy_log_rent_notes')->nullable();
            $table->date('tenancy_log_rent_date_updated')->nullable();
            $table->integer('tenancy_log_rent_updated_by')->nullable();

            $table->foreign('tenancy_log_rent_tenancy_id', 'fk_tenancy_log_rent_tenancy_log_rent_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_log_rent_updated_by', 'fk_tenancy_log_rent_tenancy_log_rent_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_log_rent');
    }
};
