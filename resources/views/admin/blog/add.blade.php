@extends('layouts.admin')
 
@section('title')
  <title>Trang chu</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'blog', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >Tiêu đề</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nhập tiêu đề">
                        
                    </div>

                    <div class="form-group">
                        <label >Link</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Link">
                        
                    </div>
                    <div class="form-group">
                        <label >Hình ảnh</label>
                        <input type="file" 
                                class="form-control-file" 
                                name="image"
                                >
                        
                    </div>
                    <div class="form-group">
                        <label >Nội dung</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nội dung">
                        
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
  
