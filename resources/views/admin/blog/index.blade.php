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
                <th scope="col">Nội dung</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>

              @foreach ( $blogs as $blog )


              <tr>
                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>
                  <img st class="image_blog" src="{{$blog->image}}" alt="">
                </td>
                

                <td>
                  <a href="{{ route('blog.edit', ['id' => $blog->id]) }}" class="btn btn-default">Sửa</a>
                  <a href="" class="btn btn-danger">Xóa</a>

                </td>
              </tr>

              @endforeach
            </tbody>
          </table>


        </div>
        <div class="col-md-12 ">
          {{$blogs->links()}}
        </div>


      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection