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
        Schema::create('call_queue_groups', function (Blueprint $table) {
            $table->tinyInteger('call_queue_groups_id', true);
            $table->string('call_queue_groups_name', 75)->nullable();
            $table->tinyInteger('call_queue_groups_extension')->nullable();
            $table->text('call_queue_groups_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_queue_groups');
    }
};
