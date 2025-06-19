<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionTypeTable extends Migration
{
    public function up()
    {
        Schema::create('commission_type', function (Blueprint $table) {
            $table->integer('commission_type_id')->primary();
            $table->string('commission_type_name', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commission_type');
    }
}
