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
                   
                    <div class="page-title-right">
                        <a href="{{ route('admin.'.request()->segment(2).'.create') }}"  class="btn-sm btn btn-primary btn-label rounded-pill">
                            <i class="align-middle bx bx-plus label-icon rounded-pill fs-16 me-2"></i>
                            Add {{Str::title(str_replace('-', ' ', request()->segment(2)))}}
                        </a>
                    </div>
                  

                </div>
            </div>
        </div>
        <!-- end page title -->


<div id="notification">
                        
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
                                <th>
                                    Role
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                @can(['edit_admin','delete_admin', 'read_admin'])
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
    // Initialize Select2 with multiple selection
    $('#roleFilter, #statusFilter').select2({
        placeholder: 'Select an option',
        allowClear: true,
        closeOnSelect: false,
        dropdownCssClass: "bigdrop", // For larger dropdowns if needed
    });
});
$(document).ready(function(){
    var table2 = $('#datatable').DataTable({
     "processing": true,
     "serverSide": true,
    'ajax': {
    'url': '{{ route('admin.'.request()->segment(2).'.index') }}',
    'data': function(d) {
        d._token = '{{ csrf_token() }}';
        d._method = 'PATCH';
    }

    },
    "columns": [
        { "data": "sn" },
        { "data": "role" },
        { "data": "name" },
        { "data": "email" },
        { "data": "status" },
        {
            "data": "action",
            render: function(data, type, row) {
                if (type === 'display') {
                    var btn = '<div class="dropdown d-inline-block"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="align-middle ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end">';

                    @can(['edit_admin','delete_admin','read_admin'])

                    @can('read_admin')
                    btn += '<li><a class="dropdown-item" href="{{ request()->url() }}/' + row['id'] + '"><i class="align-bottom ri-eye-fill me-2 text-muted"></i> View</a></li>';
                    @endcan

                    @can('edit_admin')
                        btn+='<li><a class="dropdown-item edit-item-btn" href="'+window.location.href+'/'+row['id']+'/edit"><i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit</a></li>';
                    @endcan

                    @can('delete_admin')
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

    <script>
document.addEventListener('DOMContentLoaded', function () {
    var sortable = new Sortable(document.getElementById('sortable-table'), {
        animation: 150,
        onEnd: function (evt) {
            updateOrder();
        }
    });

    function updateOrder() {
        let rows = document.querySelectorAll('#sortable-table tr');
        let order = Array.from(rows).map((row, index) => ({
            id: row.getAttribute('data-id'),
            order: index + 1
        }));

        // Send the updated order to the server
        fetch('{{ route("admin.admin.update.order") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ order: order })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Order updated successfully');
            } else {
                alert('Failed to update order');
            }
        })
        .catch(err => console.error(err));
    }
});
</script>

<script type="module">
            window.Echo.channel('posts')
                .listen('.create', (data) => {
                    //document.getElementById('datatable').DataTable().draw('page');
                    var table = new DataTable(document.getElementById('datatable'));
                    table.draw('page');

                    console.log('Order status updated: ', data);
                    var d1 = document.getElementById('notification');
                    d1.insertAdjacentHTML('beforeend', '<div class="alert alert-success alert-dismissible fade show"><span><i class="fa fa-circle-check"></i>  '+data.message+'</span></div>');
                });
    </script>
@endpush
