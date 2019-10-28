<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('sl');
            $table->timestamps();

            $table->integer('total');
            $table->integer('balance');
            $table->integer('payment1');
            $table->date('date1');
            $table->integer('payment2');
            $table->date('date2');
            $table->integer('payment3');
            $table->date('date3');
            $table->integer('payment4');
            $table->date('date4');
            $table->integer('payment5');
            $table->date('date5');
            $table->integer('payment6');
            $table->date('date6');
            $table->integer('payment7');
            $table->date('date7');

            $table->unsignedInteger('customer_sl')->unique();

            $table->foreign('customer_sl')->references('sl')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
