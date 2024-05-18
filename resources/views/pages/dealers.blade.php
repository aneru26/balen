@extends('layout.app')

@section('contents')
    <main id="main">
      <!-- =======Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single text-white">Our Dealers</h1>
                <span class="color-text-a">Grid Properties</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Dealers ======= -->

      
      <section class="agents-grid grid">
        <div class="container">
          <div class="row">
          @foreach($users as $user)
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img
                  src="{{ asset('storage/dealercontainer/' . $user->image) }}"   
                    class="rounded-circle mx-auto d-block"
                    alt=""
                    height="300px"
                    width="300px"
                  />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="angelie.html" class="link-two">{{$user->name}}<br /> </a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                      dictum porta two.
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Email: </strong> {{$user->email}}</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://www.facebook.com/angelie.maribao.7" target="_blank" class="link-one">
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
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </section>


   
      <!-- End Agents Grid-->
    </main>
    <!-- End #main -->

   @endsection