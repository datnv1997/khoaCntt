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
Route::post('/createGiaoVien', 'GiaoVienController@create');
Route::get('/tao-giao-vien', 'GiaoVienController@test');
Route::get('/danh-sach-giao-vien', 'GiaoVienController@index');
Route::get('/danh-sach-giao-vien', 'GiaoVienController@index');
Route::get('/edit-giao-vien/id={id}', 'GiaoVienController@edit');
