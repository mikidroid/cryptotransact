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
            $table->float('amount',9,2);
            $table->string('email');
            $table->string('start_date')->nullable();
            $table->string('elapse_date')->nullable();
            $table->integer('user_id');
            $table->float('earning',9,2)->default(0);
            $table->string('plan');
            $table->integer('period');
            $table->float('interest',9,2);
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
