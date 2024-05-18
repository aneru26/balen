@extends('layout.app')



@section('contents')

<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single text-white">Car Listing</h1>
            <span class="color-text-a">Grid Properties</span>

            <body style="background-color:  #FFFF;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Single-->

  <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
          </div>
        </div>




        @foreach($cars as $car)

        <div class="col-md-4 mt-5">
          <div class="card card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{ asset('storage/carscontainer/' . $car->image) }}" alt="" class="img-a" width="500" height="200" />
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">{{$car->brand_name}}<br />{{$car->model_name}}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">price | ${{$car->price}}</span>
                  </div>
                  <a href="{{route('cardetail',['id' => $car->inventory_id])}}" class="link-a">
                    Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Vehicle</h4>
                      <span>{{$car->body_style}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Brand</h4>
                      <span>{{$car->brand_name}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Model</h4>
                      <span>{{$car->model_name}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


        @endforeach


  </section>
  <!-- End Property Grid Single-->
</main>
<!-- End #main -->


@endsection