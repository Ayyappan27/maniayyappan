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
                      <h6 class="mb-0 mt-2"> Individual</h6>
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
                      <h6 class="mb-0 mt-2">Company</h6>
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
                      <h6 class="mb-0 mt-2">Job Seeker</h6>
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
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Register --> 

@endsection