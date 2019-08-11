<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanhSachDiemDanhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danh-sach-diem-danh', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->string('msv', 200)->index('msv');
			$table->string('ho-ten', 200);
			$table->string('ma-gv', 100)->index('ma-gv');
			$table->string('ten-gv', 200);
			$table->date('ngay-diem-danh')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('trang-thai', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('danh-sach-diem-danh');
	}

}
