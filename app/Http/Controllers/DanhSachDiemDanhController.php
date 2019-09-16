<?php

namespace App\Http\Controllers;

use App\DanhSachDiemDanh;

use Illuminate\Http\Request;

class DanhSachDiemDanhController extends Controller
{
    //
    public function listDanhSachDiemDanh() {
        $danh_sach_diem_danh= DanhSachDiemDanh::all();

        if ( count($danh_sach_diem_danh) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list cong trinh cong bo",
                "data"=>$danh_sach_diem_danh
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
