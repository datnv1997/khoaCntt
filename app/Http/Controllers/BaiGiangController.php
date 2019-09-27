<?php

namespace App\Http\Controllers;

use App\BaiGiang as bg;

class BaiGiangController extends Controller
{
    //
    public function listBaiGiang()
    {
        $bg = new bg();
        $bai_giang = $bg->all();

        if (count($bai_giang) > 0) {
            return response()->json([
                "code" => "200",
                "message" => "list bai giang",
                "data" => $bai_giang,
            ], 200);
        }

        return response()->json([
            "code" => '404',
            "message" => "data is null",
        ], 400);
    }
}
