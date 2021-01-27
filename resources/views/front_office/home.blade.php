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
          <h1 class="text-white mb-2">Drop <span class="text-primary"> Resume &amp; Get </span> Your Desired Job</h1>
          <p class="lead mb-4 font-weight-normal text-white">We've got monthly and daily plans that fit your needs. You can always exchange out jobs, upgrade or scale down when you need to.</p>
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
          <h4 class="text-white">Create free account to find thousands Jobs, Employment &amp; Career Opportunities around you!</h4>
        </div>
      </div>
      <div class="col-md-3 text-lg-right">
        <a class="btn btn-dark" href="#">Post Job</a>
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
                <a class="nav-link  active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recent Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Popular Jobs</a>
              </li>
            </ul>
          </div>
          <div class="job-found ml-auto">
            <span class="badge badge-lg badge-primary">24123</span>
            <h6 class="ml-3 mb-0">Job Found</h6>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4">
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/10.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Marketing and Communications</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</li>
                          <li><i class="fas fa-filter pr-1"></i>Banking</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/11.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Group Marketing Manager</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span class="job-list-via">via</span>
                            <a class="job-list-company-name" href="#">Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                          <li><i class="fas fa-filter pr-1"></i>Customer Service</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/12.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Senior rolling stock technician</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Carphone Warehouse</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pr-1"></i>IT &amp; Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/17.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Operational manager part-time</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pr-1"></i>Financial Services</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 justify-content-center d-flex mt-4">
              <a class="btn btn-white btn-lg" href="#">View More Jobs</a>
            </div>
          </div>
          <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4">
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/13.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Communications Trainee Scheme</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span class="job-list-via">via</span>
                            <a class="job-list-company-name" href="#">Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                          <li><i class="fas fa-filter pr-1"></i>Customer Service</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/14.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Part-Time Sales Assistant</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Tan Electrics Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Park Avenue, Mumbai</li>
                          <li><i class="fas fa-filter pr-1"></i>Charity &amp; Voluntary</li>
                          <li><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/15.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Customer Service Assistant</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</li>
                          <li><i class="fas fa-filter pr-1"></i>Banking</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="front_office/images/svg/16.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">Data Entry Administrator</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Fast Systems Consultants</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Wellesley Rd, London</li>
                          <li><i class="fas fa-filter pr-1"></i>Automotive Jobs</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 justify-content-center d-flex mb-4">
              <a class="btn btn-white btn-lg" href="#">View More Jobs</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 order-lg-1">
        <div class="sidebar mb-0">
          <div class="widget bg-white p-4">
            <div class="widget-title widget-collapse">
              <h5>Specialism</h5>
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
          <div class="employers-grid bg-white mt-4 py-4">
            <div class="widget-title widget-collapse mb-3">
              <h5>Featured Company</h5>
            </div>
            <div class="mb-3">
              <img class="img-fluid" src="front_office/images/bg/bg-01.jpg" alt="">
            </div>
            <div class="employers-list-details">
              <div class="employers-list-info">
                <div class="employers-list-title">
                  <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks PLC</a></h5>
                </div>
                <div class="employers-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="employers-list-position">
              <a class="btn btn-sm btn-primary" href="#">Part-Time</a>
            </div>
          </div>
          <div class="owl-carousel owl-nav-bottom-center mt-4" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="front_office/images/svg/09.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks PLC</a></h5>
                    </div>
                    <div class="employers-list-option">
                      <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="front_office/images/svg/08.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="employer-detail.html">Suttons Financial Ltd</a></h5>
                    </div>
                    <div class="employers-list-option">
                      <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Paris, Île-de-France</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">23 Open position</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="front_office/images/svg/06.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="employer-detail.html">Altenwerth and Hamill</a></h5>
                    </div>
                    <div class="employers-list-option">
                      <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Taunton, London</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
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
                <h2>Why You Choose Job Among Other Job Site?</h2>
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
          <h2 class="text-white">Easiest Way to Use</h2>
          <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
        </div>
      </div>
    </div>
    <div class="row bg-holder-pattern mr-md-0 ml-md-0" style="background-image: url('front_office/images/step/pattern-01.png');">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-resume"></i>
          </div>
          <div class=" text-white">
            <h5>Create Account</h5>
            <p class="mb-0">Create an account and access your saved settings on any device.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-recruitment"></i>
          </div>
          <div class=" text-white">
            <h5>Find your Vacancy</h5>
            <p class="mb-0">Don't just find. Be found. Put your CV in front of great employers.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-position"></i>
          </div>
          <div class=" text-white">
            <h5>Get a Job</h5>
            <p class="mb-0">Your next career move starts here. Choose Job from thousands of companies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Easiest Way to Use -->

<!--=================================
Candidate post-box list -->
<section class="mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title center">
          <h2 class="title">Featured Candidates</h2>
          <p>Reflect and experiment until you find the right combination of motivators for your personality and your personal goals.</p>
        </div>
      </div>
      <div class="col-12">
      <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/06.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">Paul Flavius</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>General Insurance</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Ormskirk Rd, Wigan</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>3D ago</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/02.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">John Doe</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>Strategy & Consultancy</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Lynch Lane, Weymouth</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>3M ago</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/01.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">Carolyn & Dan</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>Recruitment Consultancy</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Paris, Île-de-France</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>1M ago</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/03.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">Paul Flavius</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>General Insurance</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Ormskirk Rd, Wigan</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>3D ago</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/04.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">Melissa Doe</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>Construction & Property</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>6D ago</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="candidate-list candidate-grid">
            <div class="candidate-list-image">
              <img class="img-fluid" src="front_office/images/avatar/05.jpg" alt="" >
            </div>
            <div class="candidate-list-details">
              <div class="candidate-list-info">
                <div class="candidate-list-title">
                  <h5><a href="candidate-detail.html">Felica Queen</a></h5>
                </div>
                <div class="candidate-list-option">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-filter pr-1"></i>General Insurance</li>
                    <li><i class="fas fa-map-marker-alt pr-1"></i>Union St, New Delhi</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="candidate-list-favourite-time">
              <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
              <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>2D ago</span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Candidate post-box list -->

<!--=================================
Action box -->
<!-- <section class="space-ptb bg-holder bg-overlay-black-60" style="background-image: url(images/slider/banner-02.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="section-title">
          <span class="text-primary lead font-weight-bold d-block mb-3">Post OR Get a job</span>
          <h2 class="text-white">Looking for Post OR Get a job? We have end-to-end solutions that can keep up with your criteria.</h2>
        </div>
        <a class="btn btn-primary mb-2 mb-sm-0" href="#">Post a job</a>
        <a class="btn btn-white mb-2 mb-sm-0" href="#">Browse jobs</a>
      </div>
    </div>
  </div>
</section> -->
<!--=================================
Action box -->

<!--=================================
Plans&and Packages -->
<section class="mt-4 mb-4 pb-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="section-title center">
          <h2 class="title">Buy Our Plans and Packages</h2>
          <p>We've got monthly and daily plans that fit your needs. You can always exchange out jobs, upgrade or scale down when you need to.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="pricing-plan pricing-plan-02 mt-md-3 mt-0 free">
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
          <div class="pricing-price">
            <span>$12.99 </span>
          </div>
          <ul class="list-unstyled pricing-list">
            <li>Subscription for one year</li>          </ul>
          <a class="btn btn-outline" href="#">Get Started</a>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="pricing-plan pricing-plan-02 mt-md-3 mt-0 free">
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