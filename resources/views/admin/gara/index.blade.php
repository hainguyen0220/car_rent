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
                <th scope="col">Tên gara</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>

              @foreach ( $garas as $gara )

              <tr>
                <th scope="row">{{$gara->id}}</th>
                <td>{{$gara->name}}</td>
                <td>{{$gara->address}}</td>
                <td>{{$gara->phone}}</td>
                <td>{{$gara->describe}}</td>
                <td><img src="{{$gara->image}}" alt=""></td>



                <td>
                  <a href="" class="btn btn-default">Sửa</a>
                  <a href="" class="btn btn-danger">Xóa</a>

                </td>
              </tr>

              @endforeach

            </tbody>
          </table>


        </div>
        <div class="col-md-12 ">
          {{$garas->links()}}

        </div>


      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection