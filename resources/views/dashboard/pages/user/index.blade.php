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
                                                @foreach($users as $index => $user )
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $user['first_name'] }}</td>
                                                        <td>{{ $user['email'] }}</td>
                                                        @if($user['userable_type'] == 'App\Models\Jobseeker')
                                                            <td>Jobseeker</td>
                                                        @elseif($user['userable_type'] == 'App\Models\Company')
                                                            <td>Company</td>
                                                        @elseif($user['userable_type'] == 'App\Models\Individual')
                                                            <td>Individual</td>
                                                        @endif
                                                        <td>
                                                            @if($user['status'] == 'new')
                                                                <span class="badge badge-info status{{ $user['id'] }}">{{ $user['status'] }}</span>
                                                            @elseif($user['status'] == 'active')
                                                                <span class="badge badge-success status{{ $user['id'] }}">{{ $user['status'] }}</span>
                                                            @elseif($user['status'] == 'deactive')
                                                                <span class="badge badge-danger status{{ $user['id'] }}">{{ $user['status'] }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if( $user['status'] == 'new' || $user['status'] == 'active' )
                                                                <input type="checkbox" class="form-check-input-switchery-primary updatechecked{{ $user['id'] }}" checked="" data-fouc="" data-switchery="true" style="display: none;"><span data-index="{{ $index }}" data-id="{{ $user['id'] }}" data-color="warning" class="updateStatus switchery switchery-default" style="background-color: rgb(252 207 23); border-color: rgb(252 207 23); box-shadow: rgb(252 207 23) 0px 0px 0px 10px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 18px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                            @elseif($user['status'] == 'deactive')
                                                                <input type="checkbox" class="form-check-input-switchery-primary updatechecked{{ $user['id'] }}" data-fouc="" data-switchery="true" style="display: none;"><span data-index="{{ $index }}" data-id="{{ $user['id'] }}" data-color="warning" class="updateStatus switchery switchery-default" style="background-color: rgb(255, 255, 255); border-color: rgb(223, 223, 223); box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                            @endif
                                                            <!-- <a class="edit_btn ml5"><i class="ft-edit-1"></i></a> -->
                                                        </td>
                                                    </tr>
                                                @endforeach
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

@section('custom-js')
<script src="{{ asset('/dashboard/app-assets/js/custom/userlist.js')}}"></script>
@endsection
