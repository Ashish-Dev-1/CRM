<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Created by: Ashish-Bishnoi-Dev
     * Created at: 2025-06-14 07:09:55
     */
    public function up(): void
    {
        Schema::create('bulk_email', function (Blueprint $table) {
            $table->integer('bulk_email_id', true);
            $table->string('bulk_email_from_email', 320)->nullable();
            $table->string('bulk_email_from_name', 255)->nullable();
            $table->string('bulk_email_reply_to_email', 320)->nullable();
            $table->string('bulk_email_reply_to_name', 255)->nullable();
            $table->string('bulk_email_unsubscribe_email', 320)->nullable();
            $table->text('bulk_email_unsubscribe_link')->nullable();
            $table->text('bulk_email_unsubscribe_subject')->nullable();
            $table->text('bulk_email_email_body')->nullable();
            $table->text('bulk_email_email_subject')->nullable();
            $table->string('bulk_email_to_email', 320)->nullable();
            $table->string('bulk_email_cc_email', 320)->nullable();
            $table->string('bulk_email_bcc_email', 320)->nullable();
            $table->integer('bulk_email_customer_type')->nullable();
            $table->integer('bulk_email_property_id')->nullable();
            $table->integer('bulk_email_app_req_id')->nullable();
            $table->tinyInteger('bulk_email_sent')->default(2);
            $table->dateTime('bulk_email_date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('bulk_email_date_sent')->nullable();
             // Foreign keys
            $table->foreign('bulk_email_property_id', 'fk_bulk_email_bulk_email_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bulk_email_customer_type', 'fk_bulk_email_bulk_email_customer_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bulk_email_app_req_id', 'fk_bulk_email_bulk_email_app_req_id')
                ->references('ar_id')->on('applicant_requirement')
                ->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulk_email');
    }
};