@extends('layouts.admin.admin')
@section('title', 'New Project')


@section('page-specific-styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TableTools.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}"/>
@endsection

@section('content')
            <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">New Project</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row" id="example">
                    <div class="col-12">
                        <div class="d-flex">
                            <header class="text-capitalize pt-1">User</header>
                            {{-- @can('user-create')
                            <div class="tools ml-auto">
                                <a class="btn btn-primary ink-reaction btn-sm" href="{{ route('user.create') }}">
                                    <i class="md md-add"></i>
                                    Add
                                </a>
                            </div>
                            @endcan --}}
                        </div>
                        <div class="card mt-2 p-4">
                            <div class="table-responsive">
            
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>S.No.</th>
                                        <th>User Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




        <!-- End Page-content -->
    </div>
@endsection

@section('page-specific-scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                order: [ [0, 'desc'] ]
            });
        } );
    </script>
@endsection
