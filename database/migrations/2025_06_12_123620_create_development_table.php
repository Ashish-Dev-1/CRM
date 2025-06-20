<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('development', function (Blueprint $table) {
            $table->integer('development_id')->primary();
            $table->string('development_token', 6)->nullable();
            $table->integer('development_branch')->nullable();
            $table->string('development_name')->nullable();
            $table->string('development_number_name')->nullable();
            $table->string('development_address_line_1')->nullable();
            $table->string('development_address_line_2')->nullable();
            $table->string('development_suburb')->nullable();
            $table->string('development_town_city')->nullable();
            $table->string('development_postcode', 8)->nullable();
            $table->integer('development_country')->nullable();
            $table->integer('development_default_gsc_contractor')->nullable();
            $table->integer('development_default_epc_contractor')->nullable();
            $table->integer('development_default_electrical_contractor')->nullable();
            $table->integer('development_default_pat_contractor')->nullable();
            $table->integer('development_default_fire_alarm_contractor')->nullable();
            $table->integer('development_default_emergency_lighting_contractor')->nullable();
            $table->tinyInteger('development_type')->nullable();
            $table->tinyInteger('development_requires_gas_cert')->nullable();
            $table->tinyInteger('development_requires_electric_cert')->nullable();
            $table->tinyInteger('development_requires_fire_alarm_cert')->nullable();
            $table->tinyInteger('development_requires_emergency_lighting_cert')->nullable();
            $table->tinyInteger('development_requires_fire_risk_assessment')->nullable();
            $table->text('development_works_notes')->nullable();
            $table->text('development_window_cleaning_public')->nullable();
            $table->text('development_window_cleaning_private')->nullable();
            $table->text('development_grounds_maintenance_public')->nullable();
            $table->text('development_grounds_maintenance_private')->nullable();
            $table->text('development_cleaning_public')->nullable();
            $table->text('development_cleaning_private')->nullable();
            $table->text('development_heating_public')->nullable();
            $table->text('development_heating_private')->nullable();
            $table->text('development_internet_public')->nullable();
            $table->text('development_internet_private')->nullable();
            $table->text('development_fire_alarm_public')->nullable();
            $table->text('development_fire_alarm_private')->nullable();
            $table->text('development_waste_public')->nullable();
            $table->text('development_waste_private')->nullable();
            $table->text('development_general_public')->nullable();
            $table->text('development_general_private')->nullable();
            $table->tinyInteger('development_status')->nullable();

            $table->foreign('development_branch', 'fk_development_development_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_country', 'fk_development_development_country')
                ->references('country_id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_gsc_contractor', 'fk_development_development_default_gsc_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_epc_contractor', 'fk_development_development_default_epc_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_electrical_contractor', 'fk_development_development_default_electrical_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_pat_contractor', 'fk_development_development_default_pat_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_fire_alarm_contractor', 'fk_development_development_default_fire_alarm_contractor')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_default_emergency_lighting_contractor', 'fk_development_development_default_emergency_lighting_contr')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_type', 'fk_development_development_type')
                ->references('development_type_id')->on('development_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('development');
    }
};
