<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>carforyou</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/CAR4U.png" rel="" />
  <link href="assets/img/CAR4U.png" rel="" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />


  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #595959;">
  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <form id="message_search_form">
    <div class="row">
      <div class="col-sm-2">
        <label for="">Search:</label>
      </div>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="keyword" />
      </div>
      <div class="col-sm-2 d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </div>
  </form>
  <!-- End Property Search Section -->>
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="padding-top: 5px; padding-bottom: 5px">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('home') }}">Carfor<span class="color-b">U</span></a>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">

      
        <ul class="navbar-nav">


        @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('caradmin') }}">Add Cars</a>
          </li>

          @if(Auth::user()->name === 'superadmin')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Add Dealers</a>
              </li>
          @endif
         
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicles') }}">Vehicles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dealers') }}">Dealers</a>
          </li>

          @endauth
        </ul>
      </div>

     

      <!-- Login Form and Dealers Link in the Same Container -->
      <div class="d-flex justify-content-evenly">
      @guest
    
    <a
      href="{{ route('login') }}"
      class="btn btn-success"
      style="
        background-color: #2eca6a;
        color: rgb(255, 255, 255);
        text-decoration: none;
        display: block;
        padding: 5px 10px;

      "
    >
      Login
    </a>

    @else

     <!-- User is logged in -->
    <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endguest
      <!-- End of Login Form and Dealers Link Container -->
    </div>
  </nav>
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/home.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/carwhite.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/redcar.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>


  <!-- End Intro Section -->

  <main id="main">
    <!-- ======= Services Section ======= -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a text-white">TOP 3 SOLD CARS</h2>
              </div>
            </div>
          </div>
        </div>




        <div id="property-carousel" class="swiper">


          <div class="swiper-wrapper">


            @foreach($cars as $car)
            <div class="carousel-item-b swiper-slide">
              <div style="height: 200px;" class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img width="100%" src="{{ asset('storage/carscontainer/' . $car->image) }}" alt="" class="img-a img-fluid" />
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="SUV1.html">
                          {{$car->model_name}}
                        </a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">price | {{$car->price}}</span>
                      </div>
                      <a href="{{route('cardetail',['id' => $car->inventory_id])}}" class="link-a">Click here to view
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
                        <li>
                          <h4 class="card-info-title">Color</h4>
                          <span>{{$car->color}}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            @endforeach


            <!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>
      </div>
    </section>
    <!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a text-white">Best Dealers</h2>
              </div>
              <div class="title-link">
                <a href="dealers-grid.html">
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">


        @foreach($users as $user)
          
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('storage/dealercontainer/' . $user->image) }}" width="100%" height="300px"   alt=""  />
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="edra.html" class="link-two">{{$user->name}} <br />
                      </a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    <!-- Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                      dictum porta two. -->
                  </p>
                  <div class="info-agents color-a">
                    <p><strong>Phone: </strong> 09093723907</p>
                    <p><strong>Email: </strong> edura@gmail.com</p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          @endforeach


        </div>
      </div>
    </section>
    <!-- End Agents Section -->o 

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a text-white">Latest Cars</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">
            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/chevrolet.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        The Chevrolet Traverse is a midsize SUV made by
                        General Motors released on January 12, 2024.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/chevrolet.png" alt="" class="testimonial-avatar" />
                      <h5 class="testimonial-author text-white">Chevrolet Traverse</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/gmc.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        The GMC Sierra is a strong and versatile pickup truck
                        with powerful towing capabilities.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/gmc.jpg" alt="" class="testimonial-avatar" />
                      <h5 class="testimonial-author">GMC Sierra</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End carousel item -->
          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>
      </div>
    </section>
    <!-- End Testimonials Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer" style="background-color: #787276">
  </section>
  <footer>
    <div class="socials-a">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="https://www.facebook.com/profile.php?id=100004450905212">
            <i class="bi bi-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.facebook.com/profile.php?id=100004450905212">
            <i class="bi bi-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.facebook.com/profile.php?id=100004450905212">
            <i class="bi bi-instagram" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.facebook.com/profile.php?id=100004450905212">
            <i class="bi bi-linkedin" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="copyright-footer">
      <p class="copyright color-text-a">
        <!-- <span class="color-a">EstateAgency</span> All Rights Reserved. -->
      </p>
    </div>
    <div class="credits">
      <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
      Designed by
      <a href="https://www.facebook.com/profile.php?id=100004450905212">Diosel F. Maguinda</a>
    </div>
    </div>
    </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>