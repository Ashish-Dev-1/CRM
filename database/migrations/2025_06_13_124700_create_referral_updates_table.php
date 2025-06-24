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
        Schema::create('referral_updates', function (Blueprint $table) {
            $table->integer('referral_updates_id')->primary();
            $table->unsignedBigInteger('referral_updates_referral_id')->nullable();
            $table->text('referral_updates_public_notes')->nullable();
            $table->text('referral_updates_private_notes')->nullable();
            $table->tinyInteger('referral_updates_notify_directory_company')->nullable();
            $table->tinyInteger('referral_updates_notify_client')->nullable();
            $table->dateTime('referral_updates_date_created')->nullable();
            $table->integer('referral_updates_created_by')->nullable();

            $table->foreign('referral_updates_created_by', 'fk_referral_updates_referral_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('referral_updates_referral_id', 'fk_referral_updates_referral_updates_referral_id')
                ->references('referral_id')->on('referral')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_updates');
    }
};
