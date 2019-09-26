<?php

namespace App\Http\Controllers;

use App\PhanLoaiBaiViet as pl;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhanLoaiBaiViet extends Controller
{
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
        $uuid = Str::uuid()->toString();
        $name = $request->input("name-input");
        $description = $request->input("description-input");

        $mytime = Carbon::now();
        $pl->id = $uuid;
        $pl->name = $name;
        $pl->description = $description;
        $pl->createdDate = $mytime;
        $pl->save();
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
        return redirect('/danh-sach-phan-loai');
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