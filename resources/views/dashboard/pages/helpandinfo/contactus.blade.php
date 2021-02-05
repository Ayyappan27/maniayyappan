@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
  
        <div class="content-wrapper">
             <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Contact Us Form</h3> 
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
 
                                        <form class="form form-horizontal" action="update_contact" method="POST">
                                        @csrf
                                        @foreach($data as $contact)

                                        <div class="form-body">
                                            <h4 class="form-section text-uppercase"><i class="la la-phone font-large-1"></i> Contact Us </h4>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="phone_number" >Mobile Number</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="phone_number" rows="6" class="form-control" name="phone_number"  value="{{  $contact->phone_number }}" required>
                                                    @error('phone_number')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                      
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="email" >Email</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="email" rows="6" class="form-control" name="email"  value="{{  $contact->email }}" required>
                                                      @error('email')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="whatsapp_number" >Whatsapp Number</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="whatsapp_number" rows="6" class="form-control" name="whatsapp_number"  value="{{  $contact->whatsapp_number }}" required>
                                                     @error('whatsapp_number')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror 
                                                </div> 
                                            </div>


                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="facebook_link" >Facebook Link</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input   rows="6" class="form-control" name="facebook_link"  value="{{  $contact->facebook_link }}" required>
                                                     @error('facebook_link')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror 
                                                </div> 
                                            </div>


                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="instagram_link" >Instagram Link</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="instagram_link" rows="6" class="form-control" name="instagram_link" value="{{  $contact->instagram_link }}" required>
                                                     @error('instagram_link')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror 
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="linkedin_link" >Linkedin Link</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="linkedin_link" rows="6" class="form-control" name="linkedin_link" value="{{  $contact->linkedin_link }}" required>
                                                    @error('linkedin_link')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror  
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="twitter_link" >Twitter Link </label>
                                                <div class="col-md-9 mx-auto">
                                                    <input  rows="6" class="form-control" name="twitter_link" value="{{  $contact->twitter_link }}" required>
                                                     @error('twitter_link') >
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                </div> 
                                            </div>

                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="website_link" >Website Link </label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="website_link" rows="6" class="form-control" name="website_link" value=" {{  $contact->website_link }}" required>
                                                     @error('website_link')
                                                      <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror 
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
