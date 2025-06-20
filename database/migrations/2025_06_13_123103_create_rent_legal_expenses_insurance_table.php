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
        Schema::create('rent_legal_expenses_insurance', function (Blueprint $table) {
            $table->integer('rlei_id')->primary();
            $table->tinyInteger('rlei_policy_type')->nullable();
            $table->integer('rlei_tenancy_id')->nullable();
            $table->integer('rlei_property_id')->nullable();
            $table->integer('rlei_room_id')->nullable();
            $table->string('rlei_policy_ref', 50)->nullable();
            $table->date('rlei_policy_start_date')->nullable();
            $table->date('rlei_policy_end_date')->nullable();
            $table->smallInteger('rlei_term')->nullable();
            $table->tinyInteger('rlei_term_unit')->nullable();
            $table->text('rlei_notes')->nullable();
            $table->tinyInteger('rlei_status')->nullable();
            $table->dateTime('rlei_date_created')->nullable();
            $table->dateTime('rlei_date_updated')->nullable();
            $table->integer('rlei_created_by')->nullable();
            $table->integer('rlei_updated_by')->nullable();

            $table->foreign('rlei_created_by', 'fk_rent_legal_expenses_insurance_rlei_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_property_id', 'fk_rent_legal_expenses_insurance_rlei_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_tenancy_id', 'fk_rent_legal_expenses_insurance_rlei_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_updated_by', 'fk_rent_legal_expenses_insurance_rlei_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_room_id', 'fk_rent_legal_expenses_insurance_rlei_room_id')
                ->references('property_room_letting_id')->on('property_room_letting')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_term_unit', 'fk_rent_legal_expenses_insurance_rlei_term_unit')
                ->references('tenancy_fixed_term_unit_id')->on('tenancy_fixed_term_unit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_status', 'fk_rent_legal_expenses_insurance_rlei_status')
                ->references('rleis_id')->on('rent_legal_expenses_insurance_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('rlei_policy_type', 'fk_rent_legal_expenses_insurance_rlei_policy_type')
                ->references('rleit_id')->on('rent_legal_expenses_insurance_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_legal_expenses_insurance');
    }
};
