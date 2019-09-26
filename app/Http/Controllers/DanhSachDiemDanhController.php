<?php

namespace App\Http\Controllers;

use App\DanhSachDiemDanh as Model;
use Illuminate\Http\Request;

class DanhSachDiemDanhController extends Controller
{
    //
    public function listDanhSachDiemDanh()
    {
        $danh_sach_diem_danh = DanhSachDiemDanh::all();

        if (count($danh_sach_diem_danh) > 0) {
            return response()->json([
                "code" => "200",
                "message" => "list cong trinh cong bo",
                "data" => $danh_sach_diem_danh,
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
        $Model = new Model();
        $data = $Model->all();
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
        $Model = new Model();
        $uuid = Str::uuid()->toString();
        $name = $request->input("name-input");
        $description = $request->input("description-input");

        $mytime = Carbon::now();
        $Model->id = $uuid;
        $Model->name = $name;
        $Model->description = $description;
        $Model->createdDate = $mytime;
        $Model->save();
        return redirect('/danh-sach-phan-loai');
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
     * DisModelay the specified resource.
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