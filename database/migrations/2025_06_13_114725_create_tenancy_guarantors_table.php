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
        Schema::create('tenancy_guarantors', function (Blueprint $table) {
            $table->integer('tenancy_guarantors_id')->primary();
            $table->integer('guarantor_id')->nullable();
            $table->integer('tenancy_id')->nullable();

            $table->foreign('guarantor_id', 'fk_tenancy_guarantors_guarantor_id')
                ->references('guarantor_id')->on('guarantor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_id', 'fk_tenancy_guarantors_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_guarantors');
    }
};
