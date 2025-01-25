    @extends('admin.layouts.master')
    @push('links')
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

    @endpush




    @section('main')



    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{Str::title(str_replace('-', ' ', request()->segment(2)))}}</h4>

                {{ Breadcrumbs::render('companies') }}
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-xxl-4 col-sm-12">
                                <div class="search-box">
                                    <input type="search" class="form-control search bg-light border-light" id="searchJob" autocomplete="off" placeholder="Search for jobs or companies...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <input type="text" class="form-control bg-light border-light" id="datepicker" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date">
                            </div>


                            

                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary w-100" onclick="filterData();">
                                    <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            

                            

                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary w-100" onclick="filterData();">
                                    <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table align-middle datatable table-sm border-secondary table-bordered nowrap" style="width:100%">

                            <thead>
                                <tr>
                                    <th>Si</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Business Category</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    @can(['edit_all_companies','delete_all_companies', 'read_all_companies'])
                                    <th>Action</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody id="sortable-table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->



    @endsection


    @push('scripts')

    <script type="text/javascript">

        $(document).ready(function(){
            var table2 = $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "searchning": false,
                "lengthMenu": [25, 50, 100, 250, 500],
                'ajax': {
                    'url': '{{ route('admin.'.request()->segment(2).'.index') }}',
                    'data': function(d) {
                        d._token = '{{ csrf_token() }}';
                        d._method = 'PATCH';
                    }

                },
                "columns": [
                    { "data": "sn" },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "mobile" },
                    { "data": "category" },
                    { "data": "location" },
                    { "data": "status" },
                    {
                        "data": "action",
                        render: function(data, type, row) {
                            if (type === 'display') {
                        var btn = '<div class="dropdown d-inline-block"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="align-middle ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end">';

                        @can(['edit_all_companies','delete_all_companies','read_all_companies'])

                        @can('read_all_companies')
                        btn += '<li><a class="dropdown-item" href="{{ request()->url() }}/' + row['id'] + '"><i class="align-bottom ri-eye-fill me-2 text-muted"></i> View</a></li>';
                        @endcan

                        @can('edit_all_companies')
                        btn+='<li><a class="dropdown-item edit-item-btn" href="'+window.location.href+'/'+row['id']+'/edit"><i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit</a></li>';
                        @endcan

                        @can('delete_all_companies')
                        btn += '<li><button type="button" onclick="deleteModel(\''+window.location.href+'/'+row['id']+'/delete\')" class="dropdown-item remove-item-btn"><i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i> Delete</button></li>';
                        @endcan

                        @endcan
                        btn += '</ul></div>';
                        return btn;
                    }
                    return ' ';
                },
            }]

        });
        });

    </script>



    @endpush
