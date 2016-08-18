<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApikeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apikeys', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('app_id', 100);
			$table->text('api_key', 65535);
			$table->integer('apiratelimit_id');
			$table->integer('active');
			$table->float('api_version', 10, 0);
			$table->timestamps();
			$table->integer('issued_by');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apikeys');
	}

}
