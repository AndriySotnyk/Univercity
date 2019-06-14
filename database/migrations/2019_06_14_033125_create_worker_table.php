<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('login');
            $table->string('password');
            $table->string('phoneNumber');
            $table->string('cardNumber')->nullable();
            $table->bigInteger('currentMoney')->default(0);
            $table->bigInteger('allMoney')->default(0);
            $table->bigInteger('transferredMoney')->default(0);
            $table->boolean('isLogged')->default(false);
            $table->boolean('isActive')->default(false);
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
        Schema::dropIfExists('=workers');
    }
}
