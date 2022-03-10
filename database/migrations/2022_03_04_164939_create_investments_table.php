<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
            $table->integer('amount');
            $table->string('email');
            $table->string('start_date')->nullable();
            $table->string('elapse_date')->nullable();
            $table->integer('user_id');
            $table->integer('earning')->default(0);
            $table->string('plan')->nullable();
            $table->string('status')->default('ongoing'); //ongoing or fulfilled
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
