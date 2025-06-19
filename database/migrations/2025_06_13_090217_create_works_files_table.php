<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('works_files', function (Blueprint $table) {
            $table->id('works_files_id');
            $table->unsignedInteger('works_id')->nullable();
            $table->string('works_files_filename', 255)->nullable();
            $table->string('works_files_caption', 100)->nullable();
            $table->dateTime('works_files_date_added')->nullable();
            $table->mediumInteger('works_files_sort')->nullable();

            $table->foreign('works_id', 'fk_works_files_works_id')
                ->references('works_id')->on('works')
                ->onUpdate('no action')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works_files');
    }
};
