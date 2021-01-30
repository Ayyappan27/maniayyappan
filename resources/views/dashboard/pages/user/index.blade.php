@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
  
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                     
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- datatable start -->

              
          


                                    <table id="userlist" class="display w100">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th> 
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mani </td>
                                                    <td>Mani@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Karthik </td>
                                                    <td>Karthik@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>3</td>
                                                    <td>Dev </td>
                                                    <td>Dev@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>4</td>
                                                    <td>Appteq </td>
                                                    <td>info@appteq.in</td>
                                                    <td>Company</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>5</td>
                                                    <td>ManiDev </td>
                                                    <td>Mani2000@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-danger">Disable</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning"  /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>6</td>
                                                    <td>Karthik </td>
                                                    <td>KarthikDev@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>7</td>
                                                    <td>TestCompany </td>
                                                    <td>TestCompany@appteq.in</td>
                                                    <td>Company</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>Karthik </td>
                                                    <td>Karthik@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-danger">Disable</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning"  /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>9</td>
                                                    <td>Dev </td>
                                                    <td>Dev@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>10</td>
                                                    <td>Appteq </td>
                                                    <td>info@appteq.in</td>
                                                    <td>Company</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>11</td>
                                                    <td>ManiDev </td>
                                                    <td>Mani2000@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-danger">Disable</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>12</td>
                                                    <td>Karthik </td>
                                                    <td>KarthikDev@appteq.in</td>
                                                    <td>Jobseeker</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                       <input type="checkbox"  class="switchery" data-size="xs" data-color="warning" checked /> 
                                                       <a class="edit_btn ml5"><i class="ft-edit-1"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <!-- datatable ends -->











 







                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div> 
    <!-- END: Content-->
@endsection
