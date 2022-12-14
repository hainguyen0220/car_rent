@extends('layouts.admin')
 
@section('title')
  <title>Trang chu</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'gara', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >Tên gara</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nhập tên gara">
                        
                    </div>

                    <div class="form-group">
                        <label >Số điện thoại</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nhập số điện thoại">
                        
                    </div>
                    <div class="form-group">
                        <label >Địa chỉ</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nhập địa chỉ">
                        
                    </div>
                   
                    <div class="form-group">
                        <label >Thông tin</label>
                        <input type="text" 
                                class="form-control" 
                                name="name"
                                placeholder="Nhập thông tin">
                        
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
  
