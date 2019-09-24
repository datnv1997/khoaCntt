@extends('layouts.backend')

@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>

                <th style="width: 30%;">Id</th>

                <th style="width: 30%;">Tiêu đề</th>
                <th style="width: 30%;">Mô tả</th>
                <th style="width: 30%;">Ngày tạo</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td class="font-size-sm">{{$data->id}}</td>
                <td class="font-size-sm">{{$data->name}}</td>
                <td class="font-size-sm">{{$data->description}}</td>
                <td class="font-size-sm">{{$data->createdDate}}</td>

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
