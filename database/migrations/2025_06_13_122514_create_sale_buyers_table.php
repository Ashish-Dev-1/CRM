<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sale_buyers', function (Blueprint $table) {
            $table->integer('sale_buyers_id')->primary();
            $table->integer('buyer_id')->nullable();
            $table->integer('sale_id')->nullable();

            $table->foreign('buyer_id', 'fk_sale_buyers_buyer_id')
                ->references('buyer_id')->on('buyer')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_id', 'fk_sale_buyers_sale_id')
                ->references('sale_id')->on('sale')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_buyers');
    }
};
