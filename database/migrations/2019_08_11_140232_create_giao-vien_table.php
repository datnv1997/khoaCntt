<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiaoVienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('giao-vien', function(Blueprint $table)
		{
			$table->string('mgv', 100)->primary();
			$table->string('ho-ten', 300);
			$table->string('bo-mon', 200);
			$table->string('cap-bac', 200);
			$table->date('ngay-sinh');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('giao-vien');
	}

}
