@extends('layouts.admin')
 
@section('title')
  <title>Gara</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'gara', 'key' => 'List'])

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
                      <th scope="col">Số GPLX</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col">Ngày sinh</th>
                      <th scope="col">Ảnh GPLX</th>
                      <th scope="col">Action</th>
                      
                      </tr>
                  </thead>
                  <tbody>

                     

                        <tr>
                          <th scope="row">1</th>
                          <td>12241242111552</td>
                          <td>Nguyễn Long Hải</td>
                          <td>02/10/2000</td>
                          <td></td>

                          
                          <td>
                            <a href="" class="btn btn-default">Xác nhận</a>
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
  
