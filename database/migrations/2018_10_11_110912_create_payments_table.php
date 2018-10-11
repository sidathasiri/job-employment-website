<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('type');
            $table->string('holder_name');
            $table->string('email');
            $table->string('account_number');
            $table->string('routing_number');
            $table->string('bank_name');
            $table->string('address');
            $table->string('question1');
            $table->string('question1_ans');
            $table->string('question2');
            $table->string('question2_ans');
            $table->string('question3');
            $table->string('question3_ans');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
