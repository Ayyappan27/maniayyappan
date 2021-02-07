@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Terms and Conditons</h3>
            </div>
        </div>
        <div class="content-body">
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success alert-dismissable custom-success-box"
                                            style="margin: 15px;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger alert-dismissable custom-danger-box"
                                            style="margin: 15px;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <form class="form form-horizontal" action="{{ route('terms.update') }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        @foreach ($data as $content)
                                            <div class="form-body">
                                                <h4 class="form-section text-uppercase"><i
                                                        class="la la-language font-large-1"></i> {{ $content->language }}
                                                </h4>
                                                <div class="form-group row">
                                                    <div class="col-md-12 mx-auto">
                                                        <textarea id="projectinput9" rows="6" class="summernote"
                                                            name="contents[]" placeholder="Type here..." required>
                                                                {{ $content->content }}
                                                            </textarea>
                                                    </div>

                                                    <input type="hidden" name="language[]"
                                                        value='{{ $content->language }}'>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="form-actions">
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
