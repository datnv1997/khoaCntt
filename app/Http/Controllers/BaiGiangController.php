<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiGiang;

class BaiGiangController extends Controller
{
    //
    public function listBaiGiang() {
        $bai_giang = BaiGiang::all();

        if ( count($bai_giang) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list bai giang",
                "data"=>$bai_giang
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
