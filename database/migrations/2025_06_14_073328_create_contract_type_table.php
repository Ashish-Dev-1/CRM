<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTypeTable extends Migration
{
    public function up()
    {
        Schema::create('contract_type', function (Blueprint $table) {
            $table->integer('contract_type_id')->primary();
            $table->string('contract_type_name', 30)->nullable();
            $table->string('contract_type_description', 200)->nullable();
            $table->tinyInteger('contract_type_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contract_type');
    }
}
