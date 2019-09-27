<?php

namespace App\Http\Controllers;

use App\MonHoc as mh;

use Illuminate\Http\Request;

class MonHocController extends Controller
{
    //
    public function listMonHoc() {
        $mh = new mh();
        $mon_hoc= $mh->all();

        if ( count($mon_hoc) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list cong trinh cong bo",
                "data"=>$mon_hoc
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }
}
