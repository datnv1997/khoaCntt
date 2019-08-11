<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lop', function(Blueprint $table)
		{
			$table->string('mlop', 100)->primary();
			$table->string('khoa', 100)->default('cntt');
			$table->string('mgv-cn', 100)->index('mgv-cn');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lop');
	}

}
