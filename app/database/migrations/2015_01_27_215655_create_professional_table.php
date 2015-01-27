<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professional_table', function($professional_table)
		{
			$professional_table->increments('id');
			$professional_table->string('type');
			$professional_table->text('details');
			$professional_table->integer('time_limit');
			$professional_table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professional_table');
	}

}
