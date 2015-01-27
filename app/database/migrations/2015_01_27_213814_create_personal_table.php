<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_table', function($personal_table)
		{
			$personal_table->increments('id');
			$personal_table->string('type');
			$personal_table->text('details');
			$personal_table->integer('time_limit');
			$personal_table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal_table');
	}

}
