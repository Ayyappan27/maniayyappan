<!doctype html>
<html  >
<head>
<meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Wize Genie" />
    <meta name="author" content="linkia.qa" />
    <title>WizeGenie</title>
    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory ()-->
    <link rel="stylesheet" href="{{ asset('front_office/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins ()-->
    <link rel="stylesheet" href="{{ asset('front_office/css/range-slider/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/subtle-slideshow.css') }}" />

 
    <link rel="stylesheet" href="{{ asset('front_office/css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('front_office/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/custom.css') }}" />

</head>
<body>
  @include('front_office.partials.header')

  @yield('content')

  @include('front_office.partials.auth.main')


<!--=================================
feature info section -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          <!-- <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a> -->
          </div>
        </div>
      </div>
      
   

      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
            <!-- <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-job"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Individuals</p>
            <h5 class="text-white">Looking For Job?</h5>
            <!-- <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a> -->
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--=================================
feature info section -->
<footer class="footer bg-light">
  <div class="position-relative">
    <svg class="footer-shape"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      width="100%" height="85px">
      <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
        d="M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z"/>
      </svg>
    </div>
    <div class="container pt-5">
      <div class="row mt-5">
        <div class="col-lg-3 col-md-6">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Trending Job</h5>
            <ul class="list-unstyled">
              <li><a href="#">Browse Jobs</a></li>
              <li><a href="#">Browse Categories</a></li>
              <li><a href="#">Submit Resume</a></li>
              <li><a href="#">Candidate Dashboard</a></li>
              <li><a href="#">Job Alerts</a></li>
              <li><a href="#">My Bookmarks</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Trending Companies</h5>
            <ul class="list-unstyled">
              <li><a href="#">Shortcodes</a></li>
              <li><a href="#">Job Page</a></li>
              <li><a href="#">Job Page Alternative</a></li>
              <li><a href="#">Resume Page</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Subscribe Us</h5>
          <div class="footer-subscribe">
            <p>Sign Up to our Newsletter to get the latest news and offers.</p>
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-primary btn-md">Get Notified</button>
            </form>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Download App</h5>
          <div class="footer-subscribe">
            <p>Download the latest Slick new job apps now</p>
            <div class="d-inline-block">
              <a class="btn btn-white btn-sm btn-app " href="#">
                <i class="fab fa-apple"></i>
                <div class="btn-text text-left">
                  <small>Download on the </small>
                  <span class="mb-0 d-block">App Store</span>
                </div>
              </a>
              <a class="btn btn-white btn-sm btn-app mt-3" href="#">
                <i class="fab fa-google-play"></i>
                <div class="btn-text text-left">
                  <small>Get it on  </small>
                  <span class="mb-0 d-block">Google Play</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="d-flex justify-content-md-start justify-content-center">
              <ul class="list-unstyled d-flex mb-0">
                <li><a href="privacypolicy">{{ __('menu.Privacy Policy') }}</a></li>
                <li><a href="about">{{ __('menu.About') }}</a></li>
                <li><a href="contact">{{ __('menu.Contact') }}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-right mt-4 mt-md-0">
            <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Wize Job Portal </a> {{ __('menu.All Rights Reserved') }} </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=================================
  Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
  <!--=================================
  Back To Top-->
  <input type="hidden" id="signinmodal" value="{{ Session::get('SigninModal') }}" />
  <input type="hidden" id="weblang" value="{{ app()->getLocale() }}" />

    <!--================================= Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('front_office/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('front_office/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('front_office/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('front_office/js/owl-carousel/owl-carousel.min.js') }}"></script>
    <script src="{{ asset('front_office/js/slideshow/jquery.velocity.min.js') }}"></script>
    <script src="{{ asset('front_office/js/slideshow/jquery.kenburnsy.js') }}"></script>

    <script src="{{ asset('front_office/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front_office/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('front_office/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('front_office/js/custom.js') }}"></script>
    @include('sweetalert::alert')
    <script type="text/javascript">
      $(document).ready(function(){
        var modalshow = $('#signinmodal').val();
        var weblang = $('#weblang').val();
        if(modalshow == 'show')
        {
          $('#exampleModalCenter').modal({show: true});
        }
        $('#signinmodalclose').click(function (e) {
          e.preventDefault();
          $.ajax({
              type   : 'post',
              url    : weblang + '/closesigninmodal',
              data   : {_token: "{{ csrf_token() }}"},
              success: function (data) {
                  //
              }
          });
        });
        setTimeout(function(){
            $('.swal2-container').remove();
        },3000);
        $("form").on("submit", function(){
          $(".preloadersection").show();
          $("header").fadeOut();
        });
      });
    </script>
</body>
</html>
