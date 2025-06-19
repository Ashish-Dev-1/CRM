<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('status_yes_no_new', function (Blueprint $table) {
            $table->integer('status_yes_no_id')->primary();
            $table->string('status_yes_no_name', 3)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_yes_no_new');
    }
};
