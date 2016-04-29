<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('id');

            $table->string('date', 10); // YYYY-mm-dd
            $table->string('time', 5); // H:i

            $table->integer('slots')->default(4);

            $table->enum('status', ['available', 'pending', 'reserved'])->default('available');

            $table->timestamps();
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('comment');

            $table->integer('time_id')->unsigned();
            $table->foreign('time_id')->references('id')->on('times');

            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');

            $table->integer('status')->default(1);

            $table->string('message');
            $table->string('exception');

            $table->string('currency')->default('EUR');
            $table->string('currency_paid');

            $table->integer('price');
            $table->integer('price_paid');

            $table->boolean('paid')->default(false);
            $table->dateTime('payment_date');

            $table->string('ip');

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
        Schema::drop('reservations');
        Schema::drop('times');
        Schema::drop('payments');
    }
}
