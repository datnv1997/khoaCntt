<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Example Routes
Route::view('/', 'op_auth_signin')->middleware('auth');
// Route::view('/login', 'op_auth_signin');
Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
// Route::view('/examples/plugin-helper', 'examples.plugin_helper');
// Route::view('/examples/plugin-init', 'examples.plugin_init');
// Route::view('/examples/blank', 'examples.blank');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//phanloai
Route::post('/createPhanLoai', 'PhanLoaiBaiViet@create');
Route::get('/danh-sach-phan-loai', 'PhanLoaiBaiViet@index');
Route::get('/edit-phan-loai/id={id}', 'PhanLoaiBaiViet@edit');
Route::get('/update/id={id}', 'PhanLoaiBaiViet@update');
Route::view('/tao-phan-loai-bai-viet', 'taoPhanLoai');

//hocphan
Route::post('/createHocPhan', 'LopHocPhanController@create');
// Route::get('/danh-sach-phan-loai', 'PhanLoaiBaiViet@index');
// Route::get('/edit-phan-loai/id={id}', 'PhanLoaiBaiViet@edit');
// Route::get('/update/id={id}', 'PhanLoaiBaiViet@update');
Route::get('/tao-lop-hoc-phan', 'LopHocPhanController@test');

// bai-viet
Route::view('/tao-bai-viet', 'baiViet');
Route::view('/danh-sach-bai-viet', 'danhSachBaiViet');

//giao vien
Route::view('/danh-sach-giao-vien', 'danhSachGiaovien');

//   API

Route::get('api/list-giao-vien', 'GiaoVienController@listGiaoVien');
Route::get('api/list-giao-vien/{id}', 'GiaoVienController@showGiaoVien');
Route::get('api/list-lop-hoc-phan', 'LopHocPhanController@listLopHocPhan');
Route::get('api/list-bai-giang', 'BaiGiangController@listBaiGiang');
Route::get('api/list-bo-mon', 'BoMonController@listBoMon');
Route::get('api/list-chi-tiet-bai-viet', 'ChiTetBaiVietController@listChiTietBaiViet');
Route::get('api/list-cong-trinh-cong-bo', 'CongTrinhCongBoController@listCongTrinhCongBo');
Route::get('api/list-danh-sach-bai-viet', 'DanhSachBaiVietController@listDanhSachBaiViet');
Route::get('api/list-danh-sach-diem-danh', 'DanhSachDiemDanhController@listDanhSachDiemDanh');
Route::get('api/list-de-tai-du-an', 'DeTaiDuAnController@listDeTaiDuAn');
Route::get('api/list-lop-mon-hoc', 'MonHocController@listMonHoc');