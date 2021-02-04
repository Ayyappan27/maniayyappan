@extends('front_office.layouts.app')
@section('content')
<!--=================================
banner -->
<section class="banner-bg-slider">
  <div id="bg-slider">
    <img src="{{ asset('front_office/images/bg-slider/01.jpg') }}" alt="">
    <img src="{{ asset('front_office/images/bg-slider/02.jpg') }}" alt="">
    <img src="{{ asset('front_office/images/bg-slider/03.jpg') }}" alt="">
  </div>
  <div class="banner-bg-slider-content">
    <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9 col-md-9 d-flex">
        <div class="content text-center">
          <h3 class="text-white mb-4">A <span class="text-primary"> Job Portal </span> with confidentiality at the core to enable <span class="text-primary"> your profile </span> visibility to the right  employer to maximize chances of getting <span class="text-primary"> your dream job.</span></h3> 
          <div class="job-search-field">
            <div class="job-search-item">
              <form>
                <div class="col-sm-12">
                  <div class="form-group mb-md-0 justify-content-center">
                      <input type="text" class="form-control" name="job_title" placeholder="Job Title, Skill or Company">
                    <button type="submit" class="btn btn-primary btn-lg m-0"><i class="fas fa-search"></i> Find Jobs</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--=================================
banner -->
 
<!--=================================
Action-box -->
<section class="bg-primary py-4 py-lg-5 ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 mb-4 mb-sm-4 mb-lg-0">
        <div class="d-sm-flex">
          <h4 class="text-white">Create your Account at affordable pricing plans to get noticed by thousands of Employers in your area of expertise.</h4>
        </div>
      </div>
      <div class="col-md-3 text-lg-right">
        <a class="btn btn-white btn-md" href="{{ route('front.registration', app()->getLocale()) }}">Register</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Action-box -->

<!--=================================
Browse listing -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title center">
          <h2 class="title">Browse Listing</h2>
          <p>Data trends and insights, tips for employers, product updates and best practices</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-12 order-lg-2 mb-3 mb-lg-0">
        <div class="browse-job d-flex border-0">
          <div class="style-01">
            <ul class="nav nav-tabs justify-content-center d-flex mt-0" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link  active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recent Candidates </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Popular Candidates</a>
              </li>
            </ul>
          </div>
          <div class="job-found ml-auto">
            <span class="badge badge-lg badge-primary">24123</span>
            <h6 class="ml-3 mb-0">Job Found</h6>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4">
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
               
            </div>
            <div class="col-12 justify-content-center d-flex mt-4">
              <a class="btn btn-white btn-lg" href="#">View More Candidates</a>
            </div>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4">
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Mani</a></h6>
                      </div>
                      <div class="job-list-option">
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA,</p>
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>Banking</p>
                          <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
               
            </div>
            <div class="col-12 justify-content-center d-flex mt-4">
              <a class="btn btn-white btn-lg" href="#">View More Candidates</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 order-lg-1">
        <div class="sidebar mb-0">
          <div class="widget bg-white p-4">
            <div class="widget-title widget-collapse">
              <h5>Search</h5>
            </div>
            <div class="collapse show" id="specialism">
              <div class="widget-content">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="specialism1">
                  <label class="custom-control-label" for="specialism1">IT Contractor</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="specialism2">
                  <label class="custom-control-label" for="specialism2">Charity &amp; Voluntary</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="specialism3">
                  <label class="custom-control-label" for="specialism3">Digital &amp; Creative</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="specialism4">
                  <label class="custom-control-label" for="specialism4">Estate Agency</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="specialism5">
                  <label class="custom-control-label" for="specialism5">Graduate</label>
                </div>
              </div>
            </div>
          </div>
          
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Browse listing -->

<!--=================================
Category-style -->
<section class="space-ptb">
  <div class="container">
    <div class="section-title center">
      <h2 class="title">Choose Your Sector</h2>
      <p class="mb-0">What made each of these people so successful? Motivation.</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="category-style text-center">
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-account"></i>
            </div>
            <h6>Accountancy</h6>
            <span class="mb-0">301 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-conversation"></i>
            </div>
            <h6>Apprenticeships</h6>
            <span class="mb-0">287 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-money"></i>
            </div>
            <h6>Banking</h6>
            <span class="mb-0">542 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-mortarboard"></i>
            </div>
            <h6>Education</h6>
            <span class="mb-0">785 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-worker"></i>
            </div>
            <h6>Engineering</h6>
            <span class="mb-0">862 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-businessman"></i>
            </div>
            <h6>Estate Agency</h6>
            <span class="mb-0">423 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-coding"></i>
            </div>
            <h6>IT & Telecoms</h6>
            <span class="mb-0">253 Open Position </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-balance"></i>
            </div>
            <h6>Legal</h6>
            <span class="mb-0">689 Open Position </span>
          </a>
        </div>
      </div>
      <div class="col-12 justify-content-center d-flex mt-4">
        <a class="btn btn-white btn-lg" href="#">View More Sector</a>
      </div>

    </div>
  </div>
</section>
<!--=================================
Category-style -->

<!--=================================
Why You Choose -->
<section class="bg-light">
  <div class="container-fluid p-0">
    <div class="row align-self-center m-0">
      <div class="col-md-6 bg-holder" style="background-image: url(front_office/images/bg/cover-bg-2.jpg); background-size: cover;">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="feature-content">
          <div class="row">
            <div class="col-xl-10 col-lg-12">
              <div class="section-title-02">
                <h2 class="text-capitalize" >we should mention about Referral System</h2>
                <p>We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
              </div>
            </div>
          </div>
          <div class="align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="row category-style pb-2">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-team"></i>
                    </div>
                    <h6 class="mb-2">Best talented people</h6>
                    <p>If success is a process with a number of defined steps.</p>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-chat"></i>
                    </div>
                    <h6 class="mb-2">Easy to communicate</h6>
                    <p>Having clarity of purpose and a clear picture of what you desire.</p>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-job-3"></i>
                    </div>
                    <h6 class="mb-2">Easy to find candidate</h6>
                    <p>Introspection is the trick. Understand what you want.</p>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-job-2"></i>
                    </div>
                    <h6 class="mb-2">Global recruitment option</h6>
                    <p>There are basically six key areas to higher achievement.</p>
                  </div>
                </div>
                <a class="btn btn-primary" href="#">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Why You Choose -->

<!--=================================
Top Companies -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <div class="section-title center">
          <h2 class="title">Top Companies</h2>
          <p>Data trends and insights, tips for employers, product updates and best practices</p>
        </div>
        <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/07.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Trout Design Ltd</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Wellesley Rd, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/08.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Needham, MA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/09.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Trout Design Ltd</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Wellesley Rd, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/10.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Needham, MA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/11.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Rippin LLC</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Park Avenue, Mumbai</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/12.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Trophy and Sons</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Green Lanes, London</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/13.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Needham, MA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/14.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Rippin LLC</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Park Avenue, Mumbai</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="front_office/images/svg/15.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Trophy and Sons</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pr-1"></i>Green Lanes, London</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Top Companies -->

<!--=================================
Easiest Way to Use -->
<section class="space-ptb bg-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-title-02 text-center text-white">
          <h2 class="text-white">Job seeker Perspective</h2>
        </div>
      </div>
    </div>
    <div class="row bg-holder-pattern mr-md-0 ml-md-0" style="background-image: url('front_office/images/step/pattern-01.png');">
      <div class="col-lg-15 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-account"></i>
          </div>
          <div class=" text-white">
            <h5>Create Account</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-15 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-resume"></i>
          </div>
          <div class="text-white">
            <h5>Prepare your Resume</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-15 mb-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-money"></i>
          </div>
          <div class=" text-white">
            <h5>Refer your Friend and Earn Bonus</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-15 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-notification"></i>
          </div>
          <div class=" text-white">
            <h5>Get Noticed</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-15 mb-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-job-1"></i>
          </div>
          <div class=" text-white">
            <h5>Get Job</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Easiest Way to Use -->

<!--=================================
Plans&and Packages -->
<section class="mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">


        <div class="section-title center">
          <h2 class="title">Subscribe to Your Plans and Referral Scheme</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="pricing-plan pricing-plan-02 mt-md-3 mt-0 free">


        <div class="information-element">
          <a href="#" data-toggle="tooltip" title="Subscription plan"> <i class="fa fa-question"></i> </a>
        </div>

          <div class="pricing-price">
            <span>$3.99 </span>
          </div>
          <ul class="list-unstyled pricing-list">
            <li>Subscription for one month</li>
          </ul>
          <a class="btn btn-outline" href="#">Get Started</a>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="pricing-plan pricing-plan-02 sponsor active">

           <div class="information-element">
          <a href="#" data-toggle="tooltip" title="Subscription plan!"> <i class="fa fa-question"></i> </a>
        </div>

          <div class="pricing-price">
            <span>$12.99 </span>
          </div>
          <ul class="list-unstyled pricing-list">
            <li>Subscription for one year</li></ul>
          <a class="btn btn-outline" href="#">Get Started</a>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="pricing-plan pricing-plan-02 mt-md-3 mt-0 free">

           <div class="information-element">
          <a href="#" data-toggle="tooltip" title="Subscription plan!"> <i class="fa fa-question"></i> </a>
        </div>

          <div class="pricing-price">
            <span>$8.99</span>
          </div>
          <ul class="list-unstyled pricing-list">
            <li>Subscription for six month</li>
          </ul>
          <a class="btn btn-outline" href="#">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Plans&and Packages -->

 

@endsection