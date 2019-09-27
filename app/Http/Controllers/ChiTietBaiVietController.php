<?php

namespace App\Http\Controllers;

use App\ChiTietBaiViet as ctbv;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChiTietBaiVietController extends Controller
{
    //
    public function listChiTietBaiViet() {
        $ctbv = new ctbv();
        $chi_tiet_bai_viet = $ctbv->all();

        if ( count($chi_tiet_bai_viet) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list chi tiet bai viet",
                "data"=>$chi_tiet_bai_viet
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
