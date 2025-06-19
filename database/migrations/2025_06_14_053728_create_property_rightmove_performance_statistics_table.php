<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_rightmove_performance_statistics', function (Blueprint $table) {
            $table->integer('prps_id')->primary();
            $table->date('prps_date')->nullable();
            $table->integer('prps_property_id')->nullable();
            $table->tinyInteger('prps_property_availability')->nullable();
            $table->tinyInteger('prps_property_status')->nullable();
            $table->tinyInteger('prps_featured_property')->nullable();
            $table->tinyInteger('prps_premium_listing')->nullable();
            $table->integer('prps_total_summary_views')->nullable();
            $table->integer('prps_total_detail_views')->nullable();
            $table->decimal('prps_click_through_rate', 4, 1)->nullable();

            $table->foreign('prps_property_id', 'fk_property_rightmove_performance_statistics_prps_prope')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('prps_property_availability', 'fk_property_rightmove_performance_statistics_prps_property_avai')
                ->references('property_availability_id')->on('property_availability')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('prps_property_status', 'fk_prop_rightmove_performance_statistics_prps_prop_status')
                ->references('property_status_id')->on('property_status')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_rightmove_performance_statistics');
    }
};
