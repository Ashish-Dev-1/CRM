<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_commission_scheme', function (Blueprint $table) {
            $table->tinyInteger('directory_commission_scheme_id')->primary();
            $table->string('directory_commission_scheme_name', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory_commission_scheme');
    }
};
