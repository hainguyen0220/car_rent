@extends('layouts.admin')
 
@section('title')
  <title>Discount</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'discount', 'key' => 'Liss'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
              <a href="" class="btn btn-success float-right float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Mã giảm giá</th>
                      <th scope="col">Giá trị giảm(VNĐ)</th>
                      <th scope="col">Thời gian bắt đầu</th>
                      <th scope="col">Thời gian kết thúc</th>
                      <th scope="col">Action</th>
                      
                      </tr>
                  </thead>
                  <tbody>
                
                        <tr>
                          <th scope="row">1</th>
                          <td>NGAYTOTDEP2</td>
                          <td>300.000</td>
                          <td>10/12/2022</td>
                          <td>10/12/2023</td>

                          
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
  
