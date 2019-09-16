<?php

namespace App\Http\Controllers;

use App\ChiTietBaiViet;

use Illuminate\Http\Request;

class ChiTietBaiVietController extends Controller
{
    //
    public function listChiTietBaiViet() {
        $chi_tiet_bai_viet = ChiTietBaiViet::all();

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
