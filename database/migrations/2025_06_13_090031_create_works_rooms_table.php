<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('works_room', function (Blueprint $table) {
            $table->tinyIncrements('works_room_id');
            $table->string('works_room_name', 50)->nullable();
            $table->tinyInteger('works_room_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works_room');
    }
};
