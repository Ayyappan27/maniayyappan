@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info">500</h3>
                                        <h6>Number of Users</h6>
                                    </div>
                                    <div>
                                        <i class="icon-user info font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">400</h3>
                                        <h6>Number of Jobseekers</h6>
                                    </div>
                                    <div>
                                        <i class="icon-users warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">100</h3>
                                        <h6>Number of Companies</h6>
                                    </div>
                                    <div>
                                        <i class="icon-list success font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">150</h3>
                                        <h6>Accepted Links</h6>
                                    </div>
                                    <div>
                                        <i class="icon-link danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->


              <!-- Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Last Five Registered Users</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <!-- <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">User Type</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                    

                                     <tr>
                                        <td class="text-truncate">Appteq</td>
                                        <td class="text-truncate">info@appteq.in</td>
                                        <td class="text-truncate">Company</td>
                                        <td class="text-truncate">01/01/2021</td>
                                        <td> <button type="button" class="btn btn-sm btn-outline-success round">Active</button> </td>
                                    </tr>

                                    <tr>
                                        <td class="text-truncate"> Karthik</td>
                                        <td class="text-truncate">karthik@gmail.com</td>
                                        <td class="text-truncate">Jobseeker</td>
                                        <td class="text-truncate">28/12/2020</td>
                                        <td> <button type="button" class="btn btn-sm btn-outline-success round">Active</button> </td>
                                    </tr>

                                    <tr>
                                        <td class="text-truncate">Dev</td>
                                        <td class="text-truncate">dev@gmail.com</td>
                                        <td class="text-truncate">Jobseeker</td>
                                        <td class="text-truncate">21/11/2020</td>
                                        <td> <button type="button" class="btn btn-sm btn-outline-warning round">Deactive</button> </td>
                                    </tr>

                                    <tr>
                                        <td class="text-truncate">JobPortal</td>
                                        <td class="text-truncate">info@JobPortal.in</td>
                                        <td class="text-truncate">Jobseeker</td>
                                        <td class="text-truncate">16/11/2020</td>
                                        <td> <button type="button" class="btn btn-sm btn-outline-success round">Active</button> </td>
                                    </tr>

                                    <tr>
                                        <td class="text-truncate">Mani</td>
                                        <td class="text-truncate">Mani@gmail.com</td>
                                        <td class="text-truncate">Jobseeker</td>
                                        <td class="text-truncate">11/11/2020</td>
                                        <td> <button type="button" class="btn btn-sm btn-outline-warning round">Deactive</button> </td>
                                    </tr>


                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent Transactions -->

            <!-- Products sell and New Orders -->
            <div class="row match-height">
                <div class="col-xl-8 col-12" id="ecommerceChartView">
                    <div class="card card-shadow">
                        <div class="card-header card-header-transparent py-20">
                            <div class="btn-group dropdown">
                                <a href="#" class="text-body  blue-grey-700"  >Registered Users</a> 
                            </div>
                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content bg-white p-20">
                            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Paid Users</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Date</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                         
                                        <tr>
                                            <td class="text-truncate">Mani</td>
                                            <td class="text-truncate">22/01/2021</td>
                                        </tr> 
                                        <tr>
                                            <td class="text-truncate">Test</td>
                                            <td class="text-truncate">20/01/2021</td>
                                        </tr> 
                                        <tr>
                                            <td class="text-truncate">Dev</td>
                                            <td class="text-truncate">18/01/2021</td>
                                        </tr> 
                                        <tr>
                                            <td class="text-truncate">karthik</td>
                                            <td class="text-truncate">12/01/2021</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Dev</td>
                                            <td class="text-truncate">15/01/2021</td>
                                        </tr>
                                         
                                        
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Products sell and New Orders -->

          

            <!--Recent Orders & Monthly Sales -->
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-content ">
                            <div id="cost-revenue" class="height-250 position-relative"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row mt-1">
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Number of Users</h6>
                                    <h2 class="block font-weight-normal">500</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Number of Jobseekers</h6>
                                    <h2 class="block font-weight-normal">400</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Number of Companies</h6>
                                    <h2 class="block font-weight-normal">100</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Accepted Links</h6>
                                    <h2 class="block font-weight-normal">100</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body sales-growth-chart">
                                <div id="monthly-sales" class="height-250"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="chart-title mb-1 text-center">
                                <h6>Total monthly Sales.</h6>
                            </div>
                            <div class="chart-stats text-center">
                                <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!--/Recent Orders & Monthly Sales -->

            <!-- Basic Horizontal Timeline -->
           
            <!--/ Basic Horizontal Timeline -->
        </div>
    </div>
@endsection
