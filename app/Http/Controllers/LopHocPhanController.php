<?php

namespace App\Http\Controllers;

use App\GiaoVien as gv;
use App\LopHocPhan as pl;
use Illuminate\Http\Request;

class LopHocPhanController extends Controller
{
    public function test()
    {
        $dataGv = new gv();
        $data = $dataGv->all();
        return view('taoLopHocPhan')->with('data', $data);
    }
    public function listLopHocPhan()
    {
        $lop_hoc_phan = LopHocPhan::all();

        if (count($lop_hoc_phan) > 0) {
            return response()->json([
                "code" => "200",
                "message" => "list giao vien",
                "data" => $lop_hoc_phan,
            ], 200);
        }

        return response()->json([
            "code" => '404',
            "message" => "data is null",
        ], 400);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pl = new pl();
        $data = $pl->all();
        // echo $data;
        return view("danhSachPhanLoai")->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pl = new pl();
        $dataGv = new gv();
        echo $dataGv::all();

        // $id = $request->input("id-input");
        // $name = $request->input("name-input");
        // $gv = $request->input("select");
        // $sum = $request->input("sum-input");

        // echo $id . $name . $gv . $sum;
        // $mytime = Carbon::now();
        // $pl->id = $id;
        // $pl->name = $name;
        // $pl->gv = $gv;
        // $pl->createdDate = $mytime;
        // $pl->sumStudent = $sum;
        // $pl->save();
        // return redirect('/danh-sach-phan-loai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pl = new pl();
        $data = $pl->find($id);
        return redirect('/danh-sach-phan-loai');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name = $request->input("name-input");
        $description = $request->input("description-input");
        $pl = new pl();
        $pl = pl::find($id);
        $pl->name = $name;
        $pl->description = $description;
        $pl->save();
        // return redirect()->route('danh-sach-phan-loai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
