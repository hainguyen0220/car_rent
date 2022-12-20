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
          <form action="{{route('gara.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Tên gara</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" 
              name="name" 
              placeholder="Nhập tên gara" 
              value="{{old('name')}}">
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

            </div>

            <div class="form-group">
              <label>Địa chỉ</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" 
              name="address" 
              placeholder="Nhập địa chỉ" 
              value="{{old('address')}}">
              @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

            </div>
            <div class="form-group">
              <label>Số điện thoại</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" 
              name="phone" 
              placeholder="Nhập số điện thoại" 
              value="{{old('phone')}}">
              @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

            </div>

            <div class="form-group">
              <label>Thông tin</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" 
              name="describe" 
              placeholder="Nhập thông tin" 
              value="{{old('describe')}}">
              @error('describe')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

            </div>

            <div class="form-group">
              <label>Hình ảnh</label>
              <input type="file" class="form-control @error('name') is-invalid @enderror" 
              name="image">
              @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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