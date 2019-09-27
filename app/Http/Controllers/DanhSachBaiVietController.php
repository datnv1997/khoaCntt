<?php

namespace App\Http\Controllers;

use App\DanhSachBaiViet as dsbv;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DanhSachBaiVietController extends Controller
{
    //

    public function listDanhSachBaiViet() {
        $dsbv = new dsbv();
        $danh_sach_bai_viet = $dsbv->all();

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
