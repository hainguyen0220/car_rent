@extends('layouts.admin')
 
@section('title')
  <title>Add car</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'car', 'key' => 'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
              <a href="{{route('car.create')}}" class="btn btn-success float-right float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên ô tô</th>
                      <th scope="col">Tên hãng</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Giá/ngày</th>
                      <th scope="col">Mô tả</th>
                      

                      <th scope="col">Action</th>
                      
                      </tr>
                  </thead>
                  <tbody>

                      

                        <tr>
                          
                          <td>1</td>
                          <td>HONDA I8</td>
                          <td>HONDA</td>
                          <td></td>
                          <td>
                            250.000
                          </td>
                          <td>xe thông thoáng siêu mới</td>



                          
                          <td>
                            <a href="" class="btn btn-default">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>

                          </td>
                        </tr>
                      
                      
                  </tbody>
              </table>

            
            </div>
            <div class="col-md-12 ">
             
            </div>
            

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection  
  
