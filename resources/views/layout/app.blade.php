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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">Add Dealers</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('customerManagement') }}">Customers</a>
          </li>
         
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
          <a class="btn btn-success" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      @endguest
        </div>
      <!-- End of Login Form and Dealers Link Container -->
    </div>
  </nav>
  <!-- End Header/Navbar -->








  @yield('contents')









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