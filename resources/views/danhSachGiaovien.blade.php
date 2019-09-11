@extends('layouts.backend')

@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>

                <th>Họ và tên</th>
                <th style="width: 30%;">Email</th>
                <th style="width: 30%;">Bộ môn</th>
                <th style="width: 30%;">Cấp bậc</th>
                <th style="width: 30%;">Ngày sinh</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="font-w600 font-size-sm">
                    <a href="be_pages_generic_profile.html">Laura Carr</a>
                </td>
                <td class="font-size-sm">client1<em class="text-muted">@example.com</em></td>
                <td class="font-size-sm">Khoa học máy tính</td>
                <td class="font-size-sm">Trưởng bộ môn</td>
                <td class="font-size-sm">20/08/1997</td>

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