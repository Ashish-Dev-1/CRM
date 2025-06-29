<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('local_authority_branch_reference', function (Blueprint $table) {
            $table->increments('local_authority_branch_reference_id');
            $table->integer('local_authority_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('local_authority_branch_reference', 20)->nullable();

            // Foreign keys
            // Foreign key constraint for local_authority_id removed due to migration order issue
            $table->foreign('branch_id', 'fk_local_authority_branch_reference_branch_id')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_authority_branch_reference');
    }
};
