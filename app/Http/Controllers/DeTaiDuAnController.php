<?php

namespace App\Http\Controllers;

use App\DeTaiDuAn;

use Illuminate\Http\Request;

class DeTaiDuAnController extends Controller
{
    //
    public function listDeTaiDuAn() {
        $de_tai_du_an= DeTaiDuAn::all();

        if ( count($de_tai_du_an) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list cong trinh cong bo",
                "data"=>$de_tai_du_an
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
