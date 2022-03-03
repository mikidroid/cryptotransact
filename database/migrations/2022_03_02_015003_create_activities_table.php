<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('sender')->nullable();
            $table->string('receiver')->nullable();
            $table->integer('phone')->nullable();
            $table->string('username')->nullable();
            $table->integer('amount');
            $table->string('user_id');
            $table->string('ref_id')->nullable();
            $table->string('type');
            $table->string('wallet_address')->nullable();
            $table->string('plan')->nullable();
            $table->string('status')->default('pending'); //pending or successful

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
