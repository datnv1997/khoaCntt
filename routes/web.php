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
Route::view('/forms_editors', 'forms_editors');
Route::view('/danh-sach-giao-vien', 'danhSachGiaovien');
Route::view('/danh-sach-bai-viet', 'danhSachBaiViet');




//   API

// Giáo viên
Route::get('api/list-giao-vien', 'GiaoVienController@listGiaoVien');
Route::get('api/list-giao-vien/{id}', 'GiaoVienController@showGiaoVien');

//lop học phần
Route::get('api/list-lop-hoc-phan', 'LopHocPhanController@listLopHocPhan');
