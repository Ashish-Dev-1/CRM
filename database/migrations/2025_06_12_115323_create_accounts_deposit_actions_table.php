<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsDepositActionTable extends Migration
{
    public function up(): void
    {
        Schema::create('accounts_deposit_action', function (Blueprint $table) {
            $table->integer('deposit_action_id')->primary();
            $table->string('deposit_action_name', 150)->nullable();
            $table->tinyInteger('deposit_action_sort')->nullable();
            $table->boolean('deposit_action_archived')->default(2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts_deposit_action');
    }
}