<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanhSachBaiVietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danh-sach-bai-viet', function(Blueprint $table)
		{
			$table->string('id', 100)->primary();
			$table->string('tieu-de', 300);
			$table->string('phan-loai', 300);
			$table->string('id-ng-tao', 100)->index('id-ng-tao');
			$table->string('id-phan-loai', 100)->index('id-phan-loai');
			$table->date('ngay-tao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('danh-sach-bai-viet');
	}

}
