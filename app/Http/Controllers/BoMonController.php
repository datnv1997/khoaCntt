<?php

namespace App\Http\Controllers;
use App\BoMon;

use Illuminate\Http\Request;

class BoMonController extends Controller
{
    //
    public function listBoMon() {
        $bo_mon = BoMon::all();

        if ( count($bo_mon) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list bai giang",
                "data"=>$bo_mon
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
