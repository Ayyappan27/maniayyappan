@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
  
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <a href="aboutus"><div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="la la-industry warning font-large-2"></i>
                                        </div>
                                        <div class="col-10 pl-2 mt-1">
                                            <h4>ABOUT US</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="btc-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <a href="contactus"><div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="la la-map lighten-1 font-large-2" title="ETH"></i>
                                        </div>
                                        <div class="col-10 pl-2 mt-1">
                                            <h4>CONTACT US</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="eth-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <a href="termsandcondition"><div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="la la-file lighten-1 font-large-2" title="ETH"></i>
                                        </div>
                                        <div class="col-10 pl-2 mt-1">
                                            <h4>PRIVACY POLICY</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="xrp-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->
 

            </div>


        </div> 
    <!-- END: Content-->
@endsection
