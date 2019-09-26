@extends('layouts.backend')

@section('content')


<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Tạo Giáo viên
            </h1>

        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">


    <form action=" {{url('/createGiaoVien')}}" method="Post">
        {{ csrf_field()}}
        <div class="row push">

            <div class="col-lg-12 col-xl-5 col-md-12 col-12">

                <div class="form-group">
                    <label for="example-name-input">Tên Giáo viên</label>
                    <input type="text" class="form-control" id="example-name-input" name="name-input"  placeholder=" nhập tên giáo viên..">
                </div>

                <div class="form-group">
                    <label f>Email</label>
                    <input type="text" class="form-control" id="example-name-input" name="email-input"  placeholder=" nhập Email ...">
                </div>

                <div class="form-group">
                    <label>Bộ môn</label>
                    <select class="form-control" id="example-select" name="bomon-select">
                        <option value="0">Bộ môn 1</option>
                        <option value="1">Bộ môn 2</option>
                        <option value="2">Bộ môn 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Cấp bậc</label>
                    <select class="form-control" id="example-select" name="capbac-select">
                        <option value="0">Giáo viên</option>
                        <option value="1">Trưởng khoa</option>
                        <option value="2">Phó khoa</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                </div>

            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-info" type="submit">Tạo</button>
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
