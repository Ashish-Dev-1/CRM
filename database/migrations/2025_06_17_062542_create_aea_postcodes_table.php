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
        Schema::create('aea_postcodes', function (Blueprint $table) {
            $table->id();
            $table->string('post_code', 20);
            $table->string('lat', 50);
            $table->string('lng', 50);
            // If you want timestamps, uncomment the next line:
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aea_postcodes');
    }
};