<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_permissions_category', function (Blueprint $table) {
            $table->tinyInteger('employee_permissions_category_id')->primary();
            $table->string('employee_permissions_category_name', 50)->nullable();
            $table->tinyInteger('employee_permissions_category_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_permissions_category');
    }
};
