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
        
        Schema::create('calendar_files', function (Blueprint $table) {
            $table->integer('calendar_files_id', true);
            $table->integer('calendar_event_id')->nullable();
            $table->string('calendar_files_filename', 255)->nullable()->charset('utf8mb3')->collation('utf8mb3_general_ci');
            $table->string('calendar_files_caption', 100)->nullable()->charset('utf8mb3')->collation('utf8mb3_general_ci');
            $table->dateTime('calendar_files_date_added')->nullable();
            $table->mediumInteger('calendar_files_sort')->nullable();
            
             $table->foreign('calendar_event_id', 'fk_calendar_files_calendar_event_id')
                ->references('calendar_event_id')->on('calendar_event')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_files');
    }
};
