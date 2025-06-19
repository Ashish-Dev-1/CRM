<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_role', function (Blueprint $table) {
            $table->integer('employee_role_id')->primary();
            $table->string('employee_role_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_role');
    }
};
