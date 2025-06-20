<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wins', function (Blueprint $table) {
            $table->id('win_id');
            $table->text('win_name')->nullable();
            $table->dateTime('win_date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wins');
    }
};
