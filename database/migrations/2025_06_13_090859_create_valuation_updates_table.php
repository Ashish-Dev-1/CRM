<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_updates', function (Blueprint $table) {
            $table->id('valuation_updates_id');
            $table->unsignedBigInteger('valuation_updates_valuation_id')->nullable();
            $table->text('valuation_updates_public_notes')->nullable();
            $table->text('valuation_updates_private_notes')->nullable();
            $table->tinyInteger('valuation_updates_notify_landlord_vendor')->nullable();
            $table->dateTime('valuation_updates_date_created')->nullable();
            $table->unsignedBigInteger('valuation_updates_created_by')->nullable();

            $table->foreign('valuation_updates_created_by', 'fk_valuation_updates_valuation_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('valuation_updates_valuation_id', 'fk_valuation_updates_valuation_updates_valuation_id')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_updates');
    }
};
