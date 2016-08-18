<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscription', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('package', 100);
			$table->integer('active');
			$table->float('duration_days', 10, 0);
			$table->timestamps();
			$table->integer('company_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscription');
	}

}
