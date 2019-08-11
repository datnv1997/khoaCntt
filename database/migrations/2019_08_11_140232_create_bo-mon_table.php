<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoMonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bo-mon', function(Blueprint $table)
		{
			$table->string('mbm', 100)->primary();
			$table->string('ten-bo-mon', 300);
			$table->string('khoa', 100)->default('cntt');
			$table->string('truong-bo-mon', 300);
			$table->string('pho-bo-mon', 300);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bo-mon');
	}

}
