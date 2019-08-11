<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaiGiangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bai-giang', function(Blueprint $table)
		{
			$table->string('id', 200)->primary();
			$table->string('ten-bai-giang', 200);
			$table->string('id-mon-hoc', 100)->index('id-mon-hoc');
			$table->string('ten-mon-hoc', 100);
			$table->string('id-ng-tao', 200)->index('id-ng-tao');
			$table->date('ngay-tao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('chi-tiet', 300);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bai-giang');
	}

}
