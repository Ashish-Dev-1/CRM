<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('website_search', function (Blueprint $table) {
            $table->id('website_search_id');
            $table->string('website_search_locations', 255)->nullable();
            $table->dateTime('website_search_date_added')->nullable();
            $table->decimal('website_search_longitude', 11, 8)->nullable();
            $table->decimal('website_search_latitude', 11, 8)->nullable();
            $table->text('website_search_type')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('website_search');
    }
};
