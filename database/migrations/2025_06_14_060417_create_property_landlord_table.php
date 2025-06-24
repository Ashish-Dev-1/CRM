<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_landlord', function (Blueprint $table) {
            $table->unsignedInteger('property_landlord_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->unsignedInteger('landlord_id')->nullable();
            $table->boolean('landlord_lead')->nullable();
            $table->tinyInteger('landlord_official')->default(1);
            $table->tinyInteger('landlord_invoicing')->nullable();

             // Foreign keys
            // Note: The original SQL has a likely error: it references property_landlord_id to landlord.landlord_id.
            // This is not typical. Usually, landlord_id would reference landlord.landlord_id.
            // We'll implement as per the SQL, but you may want to review this.
            $table->foreign('property_landlord_id', 'fk_property_landlord_property_landlord_id')
                ->references('landlord_id')->on('landlord')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_property_landlord_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('landlord_id', 'fk_property_landlord_landlord_id')
                ->references('landlord_id')->on('landlord')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_landlord');
    }
};
