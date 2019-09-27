@extends('layouts.backend')

@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>

                <th style="width: 30%;">Id</th>
                <th style="width: 30%;">Tên giáo viên</th>
                <th style="width: 30%;">Email</th>
                <th style="width: 30%;">Bộ môn</th>
                <th style="width: 30%;">Cấp bậc</th>
                <th style="width: 30%;">Ngày sinh</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td class="font-size-sm">{{$data->mgv}}</td>
                <td class="font-size-sm">{{$data->name}}</td>
                <td class="font-size-sm">{{$data->email}}</td>
                <td class="font-size-sm">{{$data->boMon}}</td>
                <td class="font-size-sm">{{$data->capBac}}</td>
                <td class="font-size-sm">{{$data->birthDay}}</td>

                <td class="text-center">
                    <div class="btn-group">
                        <a href="{{ url('/edit-phan-loai/id='.$data->id) }}" class="btn btn-sm btn-primary"
                            data-toggle="tooltip" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                        </a>
                        <a href="{{ url('') }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection
