@extends('layouts.admin')
 
@section('title')
  <title>User</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'user', 'key' => 'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
              <a href="{{ route('gara.create') }}" class="btn btn-success float-right float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col">Email</th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Địa chỉ</th>
                      
                      
                      </tr>
                  </thead>
                  <tbody>

                     

                        <tr>
                          <th scope="row">1</th>
                          <td>Nguyễn Long Hải</td>
                          <td>nguyenhai@gmail.com</td>
                          <td>037664999</td>
                          <td>Bùi Xương Trạch</td>

                          
                          <td>
                            <!-- <a href="" class="btn btn-default">Sửa</a> -->
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
  
