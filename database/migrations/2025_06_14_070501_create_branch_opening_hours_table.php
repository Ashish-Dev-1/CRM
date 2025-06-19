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
        Schema::create('branch_opening_hours', function (Blueprint $table) {
            $table->integer('branch_opening_hours_id')->primary();
            $table->integer('branch_id')->nullable();
            $table->tinyInteger('branch_opening_hours_day')->nullable();
            $table->time('branch_opening_hours_open_time')->nullable();
            $table->time('branch_opening_hours_close_time')->nullable();
             // Foreign key
            $table->foreign('branch_id', 'fk_branch_opening_hours_branch_id')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_opening_hours');
    }
};
