@extends('layout.app')

@section('contents')


<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Toyota</h1>
            <span class="color-text-a">Toyota Rav4</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end"></nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Single-->

  <!-- =======  SUV1 ======= -->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div id="property-single-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-b swiper-slide">
                <img width="500px" src="{{ asset('storage/carscontainer/' . $car->image) }}" alt="" />
              </div>
              <div class="carousel-item-b swiper-slide">
                <img width="500px" src="{{ asset('storage/carscontainer/' . $car->image) }}" alt="" />
              </div>
            </div>
          </div>
          <div class="property-single-carousel-pagination carousel-pagination"></div>
        </div>
      </div>

      <div class="col-sm-12">
        <div class="row justify-content-start">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-evenly">
              <div class="card-header-c d-flex">
                <div class="card-title-c align-self-center">
                  <h5 class="title-c">Price: $26,000</h5>
                </div>
              </div>
            </div>
            <a href="{{route('customer')}}" class="btn btn-success ms-3">BUY</a>

            <div class="property-summary justify-content-evenly">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Summary Specification</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Vehicle:</strong>
                    <strong>{{$car->model_name}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>VIN:</strong>
                    <strong>{{$car->vin}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Brand:</strong>
                    <strong>{{$car->brand_name}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Model:</strong>
                    <strong>{{$car->model_name}} </strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Color:</strong>
                    <strong>{{$car->color}} </strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Transmission:</strong>
                    <strong>{{$car->transmission}}</strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of SUV1-->
</main>

@endsection