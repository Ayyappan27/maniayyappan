@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Edit Sector Form</h3>
            </div>
            <div class="content-header-left col-md-6 col-12 mb-2">
                <a class="btn btn-green text-white pull-right" href="/admin/sectors">Sector List</a>
            </div>
        </div>
        <div class="content-body">
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <form class="form form-horizontal" action="{{ route('sectors.update', $sector->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section text-uppercase"><i
                                                    class="la la-pie-chart font-large-1"></i> Sector </h4>
                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="phone_number">Sector
                                                    Image</label>
                                                <div class="col-md-9 mx-auto">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="url" id="url">
                                                        <label class="custom-file-label" for="url"
                                                            aria-describedby="url">Choose file</label>
                                                    </div>
                                                    @error('url')
                                                        <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                    <img src="{{ $sector->image->url }}" class="sector_image mt-1">
                                                </div>
                                            </div>
                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="sector_name">Sector
                                                    Name</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="sector_name" rows="6" class="form-control" name="sector_name"
                                                        required="" value="{{ $sector->sector_name }}">
                                                    @error('sector_name')
                                                        <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-1 form-group row">
                                                <label class="col-md-3 label-control mt-1" for="position">Position</label>
                                                <div class="col-md-9 mx-auto">
                                                    <input id="position" rows="6" class="form-control" name="position"
                                                        required="" value="{{ $sector->position }}">
                                                    @error('position')
                                                        <p class="text-danger mb0">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
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
