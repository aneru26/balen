<!-- Section: Design Block -->
@extends('layout.app')

@section('contents')


<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('/assets/img/The\ Best\ Car\ Brands\ for\ 2022\,\ According\ to\ Consumer\ Reports.jpg');
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Customer Details</h2>

                    <form action="{{ route('registercustomer') }}" method="POST">

                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">


                            <!-- Email input -->



                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4">Name</label>
                                <input type="text" name="name" id="form3Example4" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Address</label>
                                <input type="text" id="form3Example3" name="address" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Gender</label>
                                <input type="text" id="form3Example3" name="gender" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Phone</label>
                                <input type="text" id="form3Example3" name="phone" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Annual Income</label>
                                <input type="number" id="form3Example3" name="annual_income" class="form-control" />
                            </div>



                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Buy
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

@endsection