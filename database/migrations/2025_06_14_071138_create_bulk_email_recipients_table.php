<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Created by: Ashish-Bishnoi-Dev
     * Created at: 2025-06-14 07:11:10
     */
    public function up(): void
    {
        Schema::create('bulk_email_recipient', function (Blueprint $table) {
            $table->tinyInteger('bulk_email_recipient_id', true);
            $table->string('bulk_email_recipient_name', 255)->nullable();
            $table->tinyInteger('bulk_email_recipient_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulk_email_recipient');
    }
};