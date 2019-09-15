<?php

namespace App\Http\Controllers;

use App\LopHocPhan;
use Illuminate\Http\Request;

class LopHocPhanController extends Controller
{
    public function listLopHocPhan() {
        $lop_hoc_phan = LopHocPhan::all();

        if ( count($lop_hoc_phan) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list giao vien",
                "data"=>$lop_hoc_phan
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
