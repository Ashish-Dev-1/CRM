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
        Schema::table('tenant', function (Blueprint $table) {
            $table->foreign('tenant_employment_status', 'fk_tenant_tenant_employment_status')
                ->references('employment_status_id')->on('employment_status');
            $table->foreign('tenant_income_frequency', 'fk_tenant_tenant_income_frequency')
                ->references('income_frequency_id')->on('income_frequency');
            $table->foreign('tenant_referencing_provider', 'fk_tenant_tenant_referencing_provider')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        Schema::table('tenant_income', function (Blueprint $table) {
            $table->foreign('tenant_income_frequency', 'fk_tenant_income_tenant_income_frequency')
                ->references('income_frequency_id')->on('income_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
        });

        Schema::table('tenancy_guarantors', function (Blueprint $table) {
            $table->foreign('guarantor_id', 'fk_tenancy_guarantors_guarantor_id')
                ->references('guarantor_id')->on('guarantor')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenant', function (Blueprint $table) {
            $table->dropForeign('fk_tenant_tenant_employment_status');
            $table->dropForeign('fk_tenant_tenant_income_frequency');
            $table->dropForeign('fk_tenant_tenant_referencing_provider');
        });

        Schema::table('tenant_income', function (Blueprint $table) {
            $table->dropForeign('fk_tenant_income_tenant_income_frequency');
        });

        Schema::table('tenancy_guarantors', function (Blueprint $table) {
            $table->dropForeign('fk_tenancy_guarantors_guarantor_id');
        });
    }
};
