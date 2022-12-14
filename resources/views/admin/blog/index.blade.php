@extends('layouts.admin')
 
@section('title')
  <title>blog</title>
@endsection
 
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'blog', 'key' => 'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
              <a href="{{ route('blog.create') }}" class="btn btn-success float-right float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tiêu đề</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Link</th>
                      <th scope="col">Nội dung</th>
                      <th scope="col">Action</th>
                      
                      </tr>
                  </thead>
                  <tbody>

                     

                        <tr>
                          <th scope="row">1</th>
                          <td>Vì tương lai</td>
                          <td></td>
                          <td>http:///ssssss</td>
                          <td>Trên thị trường hiện nay có rất nhiều loại <br/>ô tô khác nhau với hai lựa chọn động cơ....</td>
                          <td></td>
                          
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
  
