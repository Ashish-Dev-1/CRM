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
        Schema::create('employee_group_DELETE', function (Blueprint $table) {
            $table->integer('employee_group_id')->primary();
            $table->string('employee_group_name', 20)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_group_DELETE');
    }
};
