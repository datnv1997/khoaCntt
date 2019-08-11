<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDanhSachDiemDanhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('danh-sach-diem-danh', function(Blueprint $table)
		{
			$table->foreign('ma-gv', 'danh-sach-diem-danh_ibfk_1')->references('mgv')->on('giao-vien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('msv', 'danh-sach-diem-danh_ibfk_2')->references('msv')->on('sinh-vien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('danh-sach-diem-danh', function(Blueprint $table)
		{
			$table->dropForeign('danh-sach-diem-danh_ibfk_1');
			$table->dropForeign('danh-sach-diem-danh_ibfk_2');
		});
	}

}
