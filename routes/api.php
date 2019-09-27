<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getdata', function (Request $request) {
    return "hello";
});

Route::get('/getSinhvien', 'restController@index');
Route::get('/list-giao-vien', 'GiaoVienController@listGiaoVien');
Route::get('/list-giao-vien/{id}', 'GiaoVienController@showGiaoVien');
Route::get('/list-lop-hoc-phan', 'LopHocPhanController@listLopHocPhan');
Route::get('/list-bai-giang', 'BaiGiangController@listBaiGiang');
Route::get('/list-bo-mon', 'BoMonController@listBoMon');
Route::get('/list-chi-tiet-bai-viet', 'ChiTietBaiVietController@listChiTietBaiViet');
Route::get('/list-cong-trinh-cong-bo', 'CongTrinhCongBoController@listCongTrinhCongBo');
Route::get('/list-danh-sach-bai-viet', 'DanhSachBaiVietController@listDanhSachBaiViet');
Route::get('/list-danh-sach-diem-danh', 'DanhSachDiemDanhController@listDanhSachDiemDanh');
Route::get('/list-de-tai-du-an', 'DeTaiDuAnController@listDeTaiDuAn');
Route::get('/list-lop-mon-hoc', 'MonHocController@listMonHoc');
