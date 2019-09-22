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


    <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <div class="row push">

            <div class="col-lg-4 col-xl-7 col-md-4 col-12">

                <div class="form-group">
                    <label for="example-email-input">Tên bài viết</label>
                    <input type="email" class="form-control" id="example-email-input" name="example-email-input">
                </div>


            </div>
            <div class="col-lg-8 col-xl-5 col-md-7 col-12">
                <div class="form-group">
                    <label for="example-select">Phân loại</label>
                    <select class="form-control" id="example-select" name="example-select">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                        <option value="4">Option #4</option>
                        <option value="5">Option #5</option>
                        <option value="6">Option #6</option>
                        <option value="7">Option #7</option>
                        <option value="8">Option #8</option>
                        <option value="9">Option #9</option>
                        <option value="10">Option #10</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Nội dung</h3>

            </div>
            <div class="block-content">
                <form action="be_forms_editors.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <!-- CKEditor Container -->
                        <textarea id="js-ckeditor" name="ckeditor">Hello CKEditor!</textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-info">Tạo</button>
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
