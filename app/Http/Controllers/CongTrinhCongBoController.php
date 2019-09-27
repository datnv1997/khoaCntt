<?php

namespace App\Http\Controllers;

use App\CongTrinhCongBo as ctcb;

use Illuminate\Http\Request;

class CongTrinhCongBoController extends Controller
{

    public function listCongTrinhCongBo() {
        $ctcb = new ctcb();
        $cong_trinh_cong_bo = $ctcb->all();

        if ( count($cong_trinh_cong_bo) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list cong trinh cong bo",
                "data"=>$cong_trinh_cong_bo
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
