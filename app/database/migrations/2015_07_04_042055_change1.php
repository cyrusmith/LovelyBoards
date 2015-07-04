<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Change1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('anketas', function ($table) {

            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('toy')->nullable();
            $table->string('food')->nullable();
            $table->string('deed')->nullable();
            $table->string('song')->nullable();
            $table->string('game')->nullable();
            $table->text('more')->nullable();
            $table->string('tarif')->nullable();
            $table->string('order_name')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_phone')->nullable();

            $table->dateTime('created');
        });

        Schema::create('forms', function ($table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('signups', function ($table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->dateTime('created');
            $table->bigInteger('form_id');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
