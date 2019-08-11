<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChiTietBaiVietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chi-tiet-bai-viet', function(Blueprint $table)
		{
			$table->string('id', 100)->primary();
			$table->string('tieu-de', 200);
			$table->string('mo-ta-ngan', 100);
			$table->string('noi-dung', 1000);
			$table->string('id-phan-loai', 20)->index('id-phan-loai');
			$table->string('id-ng-tao', 100)->index('id-ng-tao');
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
		Schema::drop('chi-tiet-bai-viet');
	}

}
