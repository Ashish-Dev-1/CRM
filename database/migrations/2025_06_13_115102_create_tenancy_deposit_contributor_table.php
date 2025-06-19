<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_deposit_contributor', function (Blueprint $table) {
            $table->integer('tenancy_deposit_contributor_id')->primary();
            $table->integer('tenancy_deposit_contributor_title')->nullable();
            $table->string('tenancy_deposit_contributor_first_name', 255);
            $table->string('tenancy_deposit_contributor_surname', 255)->nullable();
            $table->decimal('tenancy_deposit_contributor_amount', 8, 2)->nullable();
            $table->integer('tenancy_id')->nullable();

            $table->foreign('tenancy_deposit_contributor_title', 'fk_tenancy_deposit_contributor_tenancy_deposit_contributor_titl')
                ->references('title_id')->on('title')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_id', 'fk_tenancy_deposit_contributor_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_deposit_contributor');
    }
};
