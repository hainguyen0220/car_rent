@extends('layouts.admin')
 
@section('title')
  <title>Thêm ô tô</title>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'car', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >Tên ô tô </label>
                        <input type="text" 
                        class="form-control" 
                        name="name"
                        placeholder="Nhập tên ô tô">
                    </div>
                    
                    <div class="form-group">
                        <label >Chọn danh mục </label>
                        <select class="form-control select2_init" name="parent_id">
                        <option value="">Chọn danh mục </option>
                        {!! $htmlOption !!}
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Ảnh ô tô </label>
                        <input type="file" 
                        class="form-control-file" 
                        name="image"
                        >
                    </div>
                    <div class="form-group">
                        <label >Ảnh chi tiết</label>
                        <input type="file" 
                        multiple
                        class="form-control-file" 
                        name="image_path[]"
                        >
                    </div>
                    <div class="form-group">
                        <label >Giá thuê ô tô</label>
                        <input type="text" 
                        class="form-control" 
                        name="price"
                        placeholder="Nhập giá thuê ô tô">
                    </div>
                    <div class="form-group">
                        <label >Địa chỉ giao nhận xe</label>
                        <input type="text" 
                        class="form-control" 
                        name="price"
                        placeholder="Nhập giá thuê ô tô">
                    </div>
                    <div class="form-group">
                        <label >Mô tả</label>
                        <textarea 
                        class="form-control tinymce_editor_init" 
                        name="describe"
                        rows="3"></textarea>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection  
  
@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script >
    $(function(){
        $(".select2_init").select2({
        placeholder: "Chọn danh mục",
        allowClear: true
        });
    })


</script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.tinymce_editor_init",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection
