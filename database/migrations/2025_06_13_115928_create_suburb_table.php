<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('suburb', function (Blueprint $table) {
            $table->integer('suburb_id')->primary();
            $table->string('suburb_name', 60)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
            $table->text('suburb_description')->nullable();
            $table->integer('suburb_branch')->nullable();
            $table->boolean('suburb_active')->default(true);
            $table->boolean('suburb_property_requirements')->default(true);

            $table->foreign('suburb_branch', 'fk_suburb_suburb_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suburb');
    }
};
