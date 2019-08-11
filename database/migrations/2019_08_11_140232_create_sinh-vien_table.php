<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSinhVienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sinh-vien', function(Blueprint $table)
		{
			$table->string('msv', 100)->primary();
			$table->string('ho-ten', 300);
			$table->string('lop', 50);
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
		Schema::drop('sinh-vien');
	}

}
