@extends('front.layouts.master')

    @section('title')
    <title>Chuyến xe của tôi</title>
    @endsection

    @section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('front/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
              <h1 class="mb-3 bread">Thông tin cá nhân</h1>
            </div>
          </div>
        </div>
      </section>

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Thông tin tài khoản</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture upload button-->
                    <button class="btn btn-success" type="button">Thêm ảnh</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Chi tiết thông tin</div>
                <div class="card-body">
                    <form>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Họ</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Họ" aria-describedby="basic-addon1">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Tên</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Tên" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Email</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Số điện thoại</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="093xxxxxxx" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" ria-describedby="basic-addon1">
                            </div>
                            
                        </div>
                            <button class="btn btn-success" type="button">Cập nhật</button>
                    </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Giấy phép lái xe</div>
                <div class="card-body">
                    <form>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">GPLX</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Nhập số giấy phép lái xe đã cấp" aria-describedby="basic-addon1">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Họ tên</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Nhập đầy đủ họ tên" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Ngày sinh</label>
                                <input class="form-control" id="inputBirthday" type="date"  placeholder="Enter your birthday" ria-describedby="basic-addon1">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Ảnh mặt trước GPLX</label>
                                <input class="form-control" id="inputBirthday" type="file" placeholder="Enter your birthday" ria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-success" type="button">Cập nhật GPLX</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
