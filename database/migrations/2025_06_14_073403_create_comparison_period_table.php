<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comparison_period', function (Blueprint $table) {
            $table->tinyInteger('comparison_period_id')->primary();
            $table->string('comparison_period_name', 50)->nullable();
            $table->tinyInteger('comparison_period_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comparison_period');
    }
};
