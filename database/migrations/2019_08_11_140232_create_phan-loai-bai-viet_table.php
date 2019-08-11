<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhanLoaiBaiVietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phan-loai-bai-viet', function(Blueprint $table)
		{
			$table->string('id', 100)->primary();
			$table->string('ten-phan-loai', 100);
			$table->date('ngay-tao')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phan-loai-bai-viet');
	}

}
