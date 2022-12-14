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
          <h1 class="mb-3 bread">Chuyến xe của tôi</h1>
        </div>
      </div>
    </div>
  </section>
      

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{asset('front/images/car-1.jpg')}}) ;">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">250.000VND <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-danger py-2 mr-1">Hủy chuyến</a> <a href="{{ asset('/car/single') }}" class="btn btn-secondary py-2 ml-1">Chi tiết đơn thuê</a></p>
                        </div>
                    </div>
                </div>
</section>



  
  @endsection