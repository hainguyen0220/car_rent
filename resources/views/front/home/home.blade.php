@extends('front.layouts.master')

@section('title')
    <title>home page</title>
@endsection

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('front/images/bg_4.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Hapaco &amp; Nền tảng thuê xe tự lái lớn nhất Việt nam</h1>
                        <p style="font-size: 18px;">Đồng hành cùng khách hàng trên mọi nẻo đường với kết nối nhanh chóng,
                            thuê xe - cho thuê xe với vài thao tác đơn giản hoàn toàn bảo mật thông tin khách thuê.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center ">
                            <div class="services-wrap rounded-right ">
                                <h3 class="heading-section mb-4">Hướng dẫn thuê ô tô</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Đặt xe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Nhận xe hoặc giao tận nơi</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Trải nghiệm chuyến đi</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Kết thúc chuyến đi</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <form action="#" class="request-form ftco-animate bg-primary col-md-8">
                                <h2>Vững chắc tay lái</h2>
                                <div class="form-group">
                                    <label for="" class="label">Địa điểm</label>
                                    <input type="text" class="form-control" placeholder="Nhập thành phố, quận, địa chỉ">
                                </div>

                                <div class="form-group ">
									<label for="" class="label ">Bắt đầu</label>

                                    <div class=" form-group d-flex ">
                                        <input type="date" class="form-control "  placeholder="Date">
                                        <input type="time" class="form-control"  placeholder="Time">
										{{-- <input class="form-control" id="book_pick_date" type="datetime-local" name="birthday" placeholder="Enter your birthday" ria-describedby="basic-addon1"> --}}

                                    </div>

									<label for="" class="label ">Kết thúc</label>
                                    <div class="form-group  d-flex ">
                                        <input type="date" class="form-control"  placeholder="Date">
                                        <input type="time" class="form-control"  placeholder="Time">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <a type="submit" href="{{ asset('car') }}" value="Thuê xe ngay"
                                        class="btn btn-secondary py-3 px-4">Thuê xe ngay</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">

                    <h2 class="mb-2">Xe nổi bật</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-1.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Thuê
                                            ngay</a> <a href="#" class="btn btn-secondary py-2 ml-1">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Thuê ngay</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Thuê ngay</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Thuê ngay</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-3.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Thuê ngay</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(front/images/car-4.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">500vnd<span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Thuê ngay</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">

                    <h2 class="mb-3">Tại sao nên chọn chúng tôi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Tiết kiệm phí thuê</h3>
                            <p>Giá thuê xe luôn công khai, tiết kiệm hơn 30% so với việc thuê xe truyền thống. Ngoài ra,
                                khách thuê xe còn nhận được rất nhiều chương trình khuyến mãi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Chủ động tìm kiếm</h3>
                            <p>Lựa chọn những dòng xe, mức giá, thời gian,... theo lịch trình của mình với thông tin cụ thể
                                của chiếc xe như biển số, hình ảnh, cấu hình đúng 100%</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">An toàn trải nghiệm</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Nhanh chóng hỗ trợ</h3>
                            <p>Đội ngũ XeGo luôn sẵn sàng hỗ trợ quý khách hàng 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">

                    <h2>Blog </h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('front/images/image_1.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('front/images/image_2.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('front/images/image_3.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
