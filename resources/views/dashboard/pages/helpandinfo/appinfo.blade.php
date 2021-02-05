@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
  
        <div class="content-wrapper">
             <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">App Info Form</h3> 
                </div> 
            </div>
            <div class="content-body">
                 <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"> 
                                <div class="card-content collpase show">
                                    <div class="card-body"> 

                                         @if(session()->has('message'))
                                            <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session()->get('message') }}
                                            </div>
                                         @endif 
 
                                        <form class="form form-horizontal" action="update_appinfo" method="POST">
                                        @csrf
                                        @foreach($data as $contact)

                                        <div class="form-body">
                                            <h4 class="form-section text-uppercase"><i class="la la-link font-large-1"></i> App Info </h4>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="phone_number" >Android Link</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="phone_number" rows="6" class="form-control" name="apk_link" value="{{  $contact->apk_link }}"  required>
                                                      
                                                </div> 
                                            </div>
 

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="email" >Apk Link Status</label>
                                                <div class="col-md-9 mx-auto mt-1">
                                                        @if( $contact->apk_status == 'yes')
                                                       <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="apk_status" id="apk_status1" value="yes" checked="">
                                                          <label class="form-check-label" for="apk_status1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="apk_status" id="apk_status2" value="no">
                                                          <label class="form-check-label" for="apk_status2">Deactive</label>
                                                        </div>
                                                        @elseif( $contact->apk_status == 'no')
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="apk_status" id="apk_status1" value="yes" >
                                                          <label class="form-check-label" for="apk_status1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="apk_status" id="apk_status2" value="no" checked="">
                                                          <label class="form-check-label" for="apk_status2">Deactive</label>
                                                        </div>
                                                        @endif
                                                   </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="email" >IOS Link</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="email" rows="6" class="form-control" name="ios_link"  value="{{  $contact->ios_link }}"   required>
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="email" >IOS Link Status</label>
                                                <div class="col-md-9 mx-auto mt-1">
                                                        @if( $contact->ios_status == 'yes')
                                                       <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="ios_status" id="ios_status1" value="yes" checked="">
                                                          <label class="form-check-label" for="ios_status1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="ios_status" id="ios_status2" value="no">
                                                          <label class="form-check-label" for="ios_status2">Deactive</label>
                                                        </div>
                                                        @elseif( $contact->ios_status == 'no')
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="ios_status" id="ios_status1" value="yes" >
                                                          <label class="form-check-label" for="ios_status1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="ios_status" id="ios_status2" value="no" checked="">
                                                          <label class="form-check-label" for="ios_status2">Deactive</label>
                                                        </div>
                                                        @endif
                                                   </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="email" >App Info Status</label>
                                                <div class="col-md-9 mx-auto mt-1">
                                                        @if( $contact->status == 'yes')
                                                       <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="yes" checked="">
                                                          <label class="form-check-label" for="inlineRadio1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="no">
                                                          <label class="form-check-label" for="inlineRadio2">Deactive</label>
                                                        </div>
                                                        @elseif( $contact->status == 'no')
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="yes" >
                                                          <label class="form-check-label" for="inlineRadio1">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="no" checked="">
                                                          <label class="form-check-label" for="inlineRadio2">Deactive</label>
                                                        </div>
                                                        @endif
                                                   </div> 
                                            </div>



                                           

                                        


                                        </div>


                                        @endforeach
                                            <div class="form-actions">
                                               <!--  <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button> -->
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save Changes
                                                </button>
                                            </div>
                                        </form>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 

                    
                </section>

            </div>


        </div> 
    <!-- END: Content-->
@endsection
