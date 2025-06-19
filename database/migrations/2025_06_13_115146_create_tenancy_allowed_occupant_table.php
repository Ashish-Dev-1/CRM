<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_allowed_occupant', function (Blueprint $table) {
            $table->integer('tenancy_allowed_occupant_id')->primary();
            $table->integer('tenancy_id')->nullable();
            $table->integer('tenancy_allowed_occupant_title')->nullable();
            $table->string('tenancy_allowed_occupant_first_name', 255)->nullable();
            $table->string('tenancy_allowed_occupant_surname', 255)->nullable();
            $table->string('tenancy_allowed_occupant_phone_number', 255)->nullable();
            $table->string('tenancy_allowed_occupant_email_address', 255)->nullable();

            $table->foreign('tenancy_allowed_occupant_title', 'fk_tenancy_allowed_occupant_tenancy_allowed_occupant_title')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_id', 'fk_tenancy_allowed_occupant_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_allowed_occupant');
    }
};
