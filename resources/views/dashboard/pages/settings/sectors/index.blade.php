@extends('dashboard.layouts.app')

@section('content')
    <!-- BEGIN: Content-->
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Sectors List</h3>
            </div>
            <div class="content-header-left col-md-6 col-12 mb-2">
                <a class="btn btn-green text-white pull-right" href="/admin/sectors/create">Add Sector</a>
            </div>
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
                                            <th>Sector Name</th>
                                            <th>Position</th>
                                            <th>Sector Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sectors as $index => $value)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $value->sector_name }}</td>
                                                <td>{{ $value->position }}</td>
                                                <td>
                                                    <img class="sector_image" src='{{ asset($value->image->url) }}'>
                                                </td>
                                                <td>
                                                    <a href="{{route('sectors.edit', $value->id)}}"
                                                        class="btn btn-success" Id="">Edit </a>
                                                    <a href="{{ route('sectors.delete', $value->id) }}"
                                                        class="btn btn-danger" Id="">Delete </a>
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
    <script src="{{ asset('/dashboard/app-assets/js/custom/sectors.js') }}"></script>
@endsection
