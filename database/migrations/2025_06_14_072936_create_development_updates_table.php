<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('development_updates', function (Blueprint $table) {
            $table->integer('development_updates_id')->primary();
            $table->integer('development_updates_development_id')->nullable();
            $table->text('development_updates_notes')->nullable();
            $table->dateTime('development_updates_date_created')->nullable();
            $table->integer('development_updates_created_by')->nullable();

            $table->foreign('development_updates_created_by', 'fk_development_updates_development_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('development_updates_development_id', 'fk_development_updates_development_updates_development_')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('development_updates');
    }
};
