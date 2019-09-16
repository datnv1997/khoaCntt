<?php

namespace App\Http\Controllers;

use App\DanhSachBaiViet;

use Illuminate\Http\Request;

class DanhSachBaiVietController extends Controller
{
    //
    public function listDanhSachBaiViet() {
        $danh_sach_bai_viet = DanhSachBaiViet::all();

        if ( count($danh_sach_bai_viet) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list cong trinh cong bo",
                "data"=>$danh_sach_bai_viet
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
