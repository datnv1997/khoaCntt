@extends('layouts.backend')

@section('content')


<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Tạo bài viết
            </h1>

        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">


    <form action=" {{url('/createPhanLoai')}}" method="Post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row push">

            <div class="col-lg-12 col-xl-5 col-md-12 col-12">

                <div class="form-group">
                    <label for="example-name-input">Tên phân loại</label>
                    <input type="text" class="form-control" id="example-name-input" name="example-name-input">
                </div>

                <div class="form-group">
                    <label for="example-textarea-input">Mô tả phân loại</label>
                    <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4"
                        placeholder="Textarea content.."></textarea>
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
