<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateUpdatesTable extends Migration
{
    public function up()
    {
        Schema::create('certificate_updates', function (Blueprint $table) {
            $table->integer('certificate_updates_id')->primary();
            $table->integer('certificate_updates_certificate_id')->nullable();
            $table->text('certificate_updates_public_notes')->nullable();
            $table->text('certificate_updates_private_notes')->nullable();
            $table->tinyInteger('certificate_updates_notify_landlord')->nullable();
            $table->tinyInteger('certificate_updates_notify_contractor')->nullable();
            $table->dateTime('certificate_updates_date_created')->nullable();
            $table->integer('certificate_updates_created_by')->nullable();

            $table->foreign('certificate_updates_created_by', 'fk_certificate_updates_certificate_updates_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('certificate_updates_certificate_id', 'fk_certificate_updates_certificate_updates_certificate_id')
                ->references('certificate_id')->on('certificate')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate_updates');
    }
}
