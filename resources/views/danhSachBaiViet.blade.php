@extends('layouts.backend')

@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th>id</th>
                <th style="width: 30%;">Tiêu đề</th>
                <th style="width: 30%;">Phân loại</th>
                <th style="width: 30%;">Ngày tạo</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>


                <td class="font-size-sm">1</td>
                <td class="font-size-sm">Thế giới thay đổi</td>
                <td class="font-size-sm">Blog</td>
                <td class="font-size-sm">20/08/2019</td>

                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>



        </tbody>
    </table>
</div>
@endsection