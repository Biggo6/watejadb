<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('firstname', 100);
			$table->string('middlename', 100);
			$table->string('lastname', 100);
			$table->string('customer_code', 100);
			$table->integer('group_id');
			$table->string('dob', 100);
			$table->string('gender', 100);
			$table->string('phone', 100);
			$table->string('mobile', 100);
			$table->string('fax', 100);
			$table->string('email', 100);
			$table->string('website', 100);
			$table->string('twitter', 100);
			$table->string('facebook', 100);
			$table->string('instagram', 100);
			$table->string('street', 100);
			$table->string('whatsappid', 100);
			$table->string('skypeid', 100);
			$table->string('suburb', 100);
			$table->string('city', 100);
			$table->string('physical_postcode', 100);
			$table->string('state', 100);
			$table->string('photo', 100);
			$table->string('data_source', 100);
			$table->string('country', 100);
			$table->timestamps();
			$table->integer('company_id');
			$table->integer('added_by');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
