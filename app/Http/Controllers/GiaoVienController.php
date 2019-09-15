<?php

namespace App\Http\Controllers;

use App\GiaoVien;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GiaoVienController extends Controller
{
    // lấy danh sách tất cả giáo viên
    public function listGiaoVien() {
        $giaovien = GiaoVien::all();

        if ( count($giaovien) > 0){
            return response()->json([
                "code"=>"200",
                "message"=>"list giao vien",
                "data"=>$giaovien
            ],200);
        }

        return response()->json([
            "code"=>'404',
            "message"=>"data is null"
        ],400);
    }

    public function update(Request $request, $id){
        $giao_vien = GiaoVien::find($id);
        return $giao_vien;
        // if( count($giao_vien) !=){
        //     if($request->input('title') == null || $request->input('body') == null){
        //         return response()->json([
        //             "status"=>"400",
        //             "message"=>"input is null"
        //         ],400);
        //     }else{
        //         $article->update($request->all());
        //         return response()->json([
        //             "status"=>"200",
        //             "message"=>"update thanh cong",
        //             "data"=>$article
        //         ],200);
        //     }
        // }else{

        // }
    }

}
