@extends('front_office.layouts.app')
@section('content')

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Register</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"> Home </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Register </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
         <div class="section-title">
          <h4 class="text-center">Create Your Account</h4>
         </div>
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active"  data-toggle="tab" href="#reg-individual" role="tab" >
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0 mt-2">Candidatae</h6>
                      <!-- <p class="mb-0">I want to discover companies.</p> -->
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item ml-auto">
                <a class="nav-link" data-toggle="tab" href="#reg-company" role="tab">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0 mt-2">Employer</h6>
                      <!-- <p class="mb-0">I want to attract the best talent.</p> -->
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item ml-4">
                <a class="nav-link"  data-toggle="tab" href="#reg-jobseeker" role="tab" >
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-job"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0 mt-2">Job seeker</h6>
                      <!-- <p class="mb-0">I want to job .</p> -->
                    </div>
                  </div>
                </a>
              </li>

           
            </ul>
          </fieldset>
          <div class="tab-content">
            
            @include('front_office.partials.register.signup-jobseeker')
            @include('front_office.partials.register.signup-company')
            @include('front_office.partials.register.signup-individual')
           



          </div>
          <!-- <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Register --> 


@endsection