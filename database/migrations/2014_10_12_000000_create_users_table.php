<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->integer('phone')->nullable();
            $table->integer('level')->default(1);
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('coin_host')->nullable();
            $table->string('wallet_address')->nullable();
            $table->string('avatar_url', 2048)->nullable();
            $table->string('ref_link');
            $table->float('balance',9,2)->default(0);
            $table->float('referral_bonus',9,0)->default(0);
            $table->float('earnings',9,0)->default(0);
            $table->integer('downlines')->default(0);
            $table->integer('investments')->default(0);
            $table->integer('withdrawals')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->boolean('profile_complete')->default(false);
            $table->string('id_type')->nullable();
            $table->string('card_front')->nullable();
            $table->string('card_back')->nullable();
            $table->string('utility_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
