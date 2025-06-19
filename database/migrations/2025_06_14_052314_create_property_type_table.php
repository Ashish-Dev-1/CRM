<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_type', function (Blueprint $table) {
            $table->integer('property_type_id')->default(0)->primary();
            $table->string('property_type_name', 50)->nullable();
            $table->integer('property_type_group')->nullable();
            $table->tinyInteger('property_type_active')->default(1);

            $table->foreign('property_type_group', 'fk_property_type_property_type_group')
                ->references('property_type_group_id')->on('property_type_group')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_type');
    }
};
