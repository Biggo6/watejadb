<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->integer('region_id');
			$table->integer('district_id');
			$table->string('email', 100);
			$table->string('phone', 100);
			$table->string('mobile', 100);
			$table->string('website', 100);
			$table->string('company_logo', 100);
			$table->string('location', 100);
			$table->text('geo_location', 65535);
			$table->integer('business_id');
			$table->string('street', 100);
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
		Schema::drop('companies');
	}

}
