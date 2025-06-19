<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_to_security', function (Blueprint $table) {
            $table->integer('property_to_security_id')->primary();
            $table->integer('property_id');
            $table->tinyInteger('property_security_id');

            $table->foreign('property_id', 'fk_property_to_security_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_security_id', 'fk_property_to_security_property_security_id')
                ->references('property_security_id')->on('property_security')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_to_security');
    }
};
