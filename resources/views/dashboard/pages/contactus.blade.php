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
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="la la-language font-large-1"></i> English</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Content in English</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="Type here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="la la-language font-large-1"></i> Arabic</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Content in  Arabic</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="Type here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="la la-language font-large-1"></i> Hindi</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Content in  Hindi</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="Type here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
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
