<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTypeTable extends Migration
{
    public function up()
    {
        Schema::create('customer_type', function (Blueprint $table) {
            $table->integer('customer_type_id')->primary();
            $table->string('customer_type_name', 20)->nullable();
            $table->string('customer_type_description', 30)->nullable();
            $table->string('customer_type_description2', 30)->nullable();
            $table->string('customer_type_description3', 10)->nullable();
            $table->string('customer_type_filename', 100)->nullable();
            $table->string('customer_type_url_search_parameter', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_type');
    }
}
