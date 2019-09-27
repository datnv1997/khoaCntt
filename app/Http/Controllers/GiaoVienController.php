<?php

namespace App\Http\Controllers;

use App\GiaoVien as gv;
use App\BoMon as bm;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class GiaoVienController extends Controller
{
    // lấy danh sách tất cả giáo viên
    public function listGiaoVien() {
        $gv = new gv();
        $giaovien =  $gv->all();

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


    public function index()
    {
        $gv = new gv();
        $data = $gv->all();
        return view('danhSachGiaoVien')->with('data', $data);
    }

    public function test ()
    {
        $bomon = new bm();
        $data = $bomon->all();
        return view('taoGiaoVien')->with('data', $data);
    }


    public function create(Request $request)
    {
        $gv = new gv();
        $uuid = Str::uuid()->toString();
        $name = $request->input("name-input");
        $email = $request->input("email-input");
        $bomon = $request->get("bomon-select");
        $capbac = $request->get("capbac-select");

        $gv->mgv = $uuid;
        $gv->name = $name;
        $gv->email = $email;
        $gv->boMon = $bomon;
        $gv->capBac = $capbac;
       // $gv->birthDay = 12-11-1990;
        $gv->save();
        return redirect('/danh-sach-giao-vien');
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
