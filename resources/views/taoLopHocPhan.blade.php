@extends('layouts.backend')

@section('content')


<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Lớp học phần
            </h1>

        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <form action="{{url('/createHocPhan')}}" method="post">
        {{ csrf_field()}}
        <div class="container">
            <div class="row push">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="id-input">Mã lớp học phần</label>
                        <input type="text" class="form-control" id="id-input" name="id-input" autofocus>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="name-input">Tên lớp học phần</label>
                        <input type="text" class="form-control" id="name-input" name="name-input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="example-select">Giáo Viên</label>
                        <select class="form-control" id="example-select" name="select">
                            <option value="0">Please select</option>
                            @foreach($data as $data)
                            <option value="1">{{$data->boMon}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="form-group">
                        <label for="example-sum-input">Tổng số sinh viên</label>
                        <input type="number" min="0" class="form-control" id="sum-input" name="sum-input">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-info" type="submit">Tạo</button>
            </div>
        </div>


    </form>

</div>

<!-- END Page Content -->
<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/js/plugins/simplemde/simplemde.min.js')}}"></script>

<!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
<script src="{{asset('/js/plugins/ckeditor/ckeditor.js')}}"></script>

<script>
CKEDITOR.replace('ckeditor');
</script>
<script>
jQuery(function() {
    One.helpers(['summernote', 'ckeditor', 'simplemde']);
});
</script>
@endsection