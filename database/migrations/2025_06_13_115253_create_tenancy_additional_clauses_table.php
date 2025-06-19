<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_additional_clauses', function (Blueprint $table) {
            $table->integer('tenancy_additional_clauses_id')->primary();
            $table->text('tenancy_additional_clauses_description')->nullable();
            $table->integer('tenancy_id')->nullable();

            $table->foreign('tenancy_id', 'fk_tenancy_additional_clauses_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_additional_clauses');
    }
};
