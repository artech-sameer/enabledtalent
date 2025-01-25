@extends('admin.layouts.master')
@push('links')
<link rel="stylesheet" href="{{asset('admin-assets/libs/select2/css/select2.min.css')}}">  
<style type="text/css">
    span.select2-selection.select2-selection--single, span.selection {
        height: 37px!important;    
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        height: 37px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 36px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 37px!important;
    }
    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 14px!important;
        font-size: .8125rem;
    }
    textarea {
        display: block;
        width: 100%;
        height: auto;
        resize: none; /* Disable the draggable resizer handle */
        overflow: hidden; /* Hide the scrollbar */
        min-height: 100px; /* Minimum height */
    }
</style>




@section('main')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{Str::title(str_replace('-', ' ', request()->segment(2)))}}</h4>

           {{ Breadcrumbs::render('city') }}

        </div>
    </div>
</div>
<!-- end page title -->


<div class="row mb-3">
    <div class="col-lg-4 col-sm-auto">
        <div>
            <a href="javascript:void(0);" class="btn btn-soft-success create"><i class="ri-add-line align-bottom me-1"></i> Add New</a>
        </div>
    </div>
    <div class="col-lg-8 col-sm">
        <div class="d-flex justify-content-sm-end gap-2">
            

            <div class="w-100">
                <div class="form-group{{ $errors->has('city_name') ? ' has-error' : '' }}">
                    {{ html()->label('City Name', 'city_name') }}
                    <div class="search-box">
                        {{ html()->text('city_name')->class('form-control search onKeyup')->placeholder('City Name') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('city_name') }}</small>
                </div>
            </div>


            <div class="w-100">
                <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                    {{ html()->label('Pincode', 'pincode') }}
                    <div class="search-box">
                        {{ html()->text('pincode')->class('form-control search onKeyup')->placeholder('Pincode') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('pincode') }}</small>
                </div>
            </div>




            <div class="ms-2 w-100">
                <div class="form-group{{ $errors->has('country_name') ? ' has-error' : '' }}">
                    {{ html()->label('Country Name', 'country_name') }}
                    <div class="search-box">
                        {{ html()->select('country_name', [])->class('form-control search onChange country_name')->placeholder('Choose Country Name') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('country_name') }}</small>
                </div>
            </div>


            <div class="ms-2 w-100">
                <div class="form-group{{ $errors->has('state_name') ? ' has-error' : '' }}">
                    {{ html()->label('State Name', 'state_name') }}
                    <div class="search-box">
                        {{ html()->select('state_name', [])->class('form-control search onChange state_name')->placeholder('Choose State Name') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('state_name') }}</small>
                </div>
            </div>


            <div class="ms-2 w-100">
                <div class="form-group{{ $errors->has('district_name') ? ' has-error' : '' }}">
                    {{ html()->label('District Name', 'district_name') }}
                    <div class="search-box">
                        {{ html()->select('district_name', [])->class('form-control search onChange district_name')->placeholder('Choose District Name') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('district_name') }}</small>
                </div>
            </div>



            

        </div>
    </div>
</div>

<div class="row my-1">


    <div class="col-lg-4 col-sm-12 col-12 position-sticky">

        <div class="card">
            <div class="card-body" id="form">
             {{ html()->form('POST', route('admin.state.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {{ html()->label('Country', 'country') }}
                    {{ html()->select('country', [])->class('form-control country')->placeholder('Choose Country') }}
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                </div>

                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    {{ html()->label('State', 'state') }}
                    {{ html()->select('state', [])->class('form-control state')->placeholder('Choose State') }}
                    <small class="text-danger">{{ $errors->first('State') }}</small>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ html()->label('Name', 'name') }}
                    {{ html()->text('name')->class('form-control')->placeholder('District Name') }}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>

                {{ html()->button('Save District')->type('button')->class('btn btn-success store') }}
            {{ html()->form()->close() }}
        </div>

    </div>


</div>


<div class="col-lg-8 col-sm-12 col-12">

    <div class="card">
        <div class="card-content">
            <div class="card-body">
                    <table id="dataTableAjax" class="display table-sm border-secondary dataTableAjax table table-striped table-bordered dom-jQuery-events" >
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Name</th>
                                <th>Pincode</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Country</th>
                                @can(['edit_city','delete_city'])
                                <th>Action</th>
                                @endcan

                            </tr>
                        </thead>

                    </table>
               
            </div>
        </div>
    </div>


</div>
</div>



@endsection




@push('scripts')
<script src="{{asset('admin-assets/libs/select2/js/select2.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    var table2 = $('#dataTableAjax').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "searching": false,
        "lengthChange": false,
        "lengthMenu": [25],
        'ajax': {
            'url': '{{ route('admin.'.request()->segment(2).'.index') }}',
            'data': function(d) {
                d._token = '{{ csrf_token() }}';
                d._method = 'PATCH';
                d.country_name = $('#country_name').val();
                d.state_name = $('#state_name').val();
                d.district_name = $('#district_name').val();
                d.city_name = $('#city_name').val();
                d.pincode = $('#pincode').val();
            }

        },
        "columns": [
            { "data": "sn" }, 
            { "data": "name" }, 
            { "data": "pincode" }, 
            { "data": "district" }, 
            { "data": "state" }, 
            { "data": "country" }, 
            {
                "data": "action",
                render: function(data, type, row) {
                    if (type === 'display') {
                        var btn = '<div class="dropdown d-inline-block"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button><ul class="dropdown-menu dropdown-menu-end">';

                        @can(['edit_city','delete_city'])

                        @can('edit_city')
                        btn+='<li><button class="dropdown-item edit-item-btn" onClick="editData(\''+window.location.href+'/'+row['id']+'\')"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</button></li>';
                        @endcan

                        @can('delete_city')
                        btn += '<li><button type="button" onclick="deleteAjax(\''+window.location.href+'/'+row['id']+'/delete\')" class="dropdown-item remove-item-btn"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</button></li>';
                        @endcan

                        @endcan
                        btn += '</ul></div>';
                        return btn;
                    }
                    return ' ';
                },

            }]

        });



 



    function create() {
        $.ajax({
            type: "GET",
            enctype: 'multipart/form-data',
            url:'{{ route('admin.'.request()->segment(2).'.create') }}',
            success:function(response){
                 $('#form').html(response);
                  $('#country').select2({
                    placeholder: 'Choose Country',
                    allowClear: true,
                    ajax: {
                        url: '{{ route('admin.common.country.list') }}',
                        dataType: 'json',
                        cache: true,
                        delay: 200,
                        data: function(params) {
                            return {
                                term: params.term || '',
                                page: params.page || 1
                            }
                        },
                    }
                });
             }
     });

    }

    $('body').on('click', '.store', function(event){
        event.preventDefault(); 
        var element = $(this);
        var form = element.closest('form'); // Move this before using the form variable

        var preloaderHtml = `<div class="card-preloader show"><div class="card-status"><div class="spinner-grow text-danger"><span class="visually-hidden">Loading...</span></div></div></div>`;
        var preloaderElement = document.createRange().createContextualFragment(preloaderHtml);
        form.prepend(preloaderElement); 
        var button = new Button(element);
        button.process();
        clearErrors();
        formData = new FormData(document.querySelector('#storeForm'));
        var url = document.querySelector('#storeForm').getAttribute('action');

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url:'{{ route('admin.'.request()->segment(2).'.store') }}',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success:function(response){
                Toastify({
                    text: response.message,
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    className: response.class,
                }).showToast();
                table2.draw('page');
                setTimeout(function() {
                    var preloader = document.querySelector('.card-preloader');
                    if (preloader) {
                        preloader.remove();
                    }
                    button.normal();
                }, 1500);
                $('#form').html(create());
            },
            error:function(error){
                setTimeout(function() {
                    var preloader = document.querySelector('.card-preloader');
                    if (preloader) {
                        preloader.remove();
                    }
                    button.normal();
                }, 1500);
                handleErrors(error.responseJSON);

            }
        });
    });

    $('body').on('keyup', '.onKeyup', function(){
        var values = $(this).val();
        if(values.length > 0){
            $('.new-status').val('');
        } else{
            $('.new-status').val(2);
        }
        table2.draw('page');
    });

    $('body').on('change', '.onChange', function(){
        table2.draw('page');
    });

    function editData(url) {
        var editURL = url;

        $.ajax({
            type: "GET",
            enctype: 'multipart/form-data',
            url:url+'/edit',
            success:function(response){
             $('#form').html(response);
             $('#country').select2({
                placeholder: 'Choose Country',
                allowClear: true,
                ajax: {
                    url: '{{ route('admin.common.country.list') }}',
                    dataType: 'json',
                    cache: true,
                    delay: 200,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        }
                    },
                }
            });
         },
         error:function(error){
            //toastr.error(error.responseJSON.message);  
         }
     });

    }


    $('body').on('click', '.update', function(event){
        event.preventDefault(); 
        var element = $(this);
        var form = element.closest('form'); // Move this before using the form variable

        var preloaderHtml = `<div class="card-preloader show"><div class="card-status"><div class="spinner-grow text-danger"><span class="visually-hidden">Loading...</span></div></div></div>`;
        var preloaderElement = document.createRange().createContextualFragment(preloaderHtml);
        form.prepend(preloaderElement); 
        var button = new Button(element);
        button.process();
        clearErrors();
        formData = new FormData(document.querySelector('#updateForm'));
        var url = document.querySelector('#updateForm').getAttribute('action');

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url:url,
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success:function(response){
                 Toastify({
                    text: response.message,
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    className: response.class,
                }).showToast();
                 table2.draw('page');
                $('#form').html(create());
                setTimeout(function() {
                    var preloader = document.querySelector('.card-preloader');
                    if (preloader) {
                        preloader.remove();
                    }
                    button.normal();
                }, 1500);
            },
            error:function(error){
            //toastr.error(error.responseJSON.message); 
                setTimeout(function() {
                    var preloader = document.querySelector('.card-preloader');
                    if (preloader) {
                        preloader.remove();
                    }
                    button.normal();
                }, 1500);
                handleErrors(error.responseJSON);

            }
        });
    });


    $('body').on('click', '.create', function(event){
        $('#form').html(create());
    });

    $('#country, #country_name').select2({
        placeholder: 'Choose Country',
        allowClear: true,
        ajax: {
            url: '{{ route('admin.common.country.list') }}',
            dataType: 'json',
            cache: true,
            delay: 200,
            data: function(params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
        }
    });

    $('body').on('change', '.country', function(){
        var country = $(this).val();
        $('#state').select2({
            placeholder: 'Choose State',
            allowClear: true,
            ajax: {
                url: '{{ route('admin.common.state.list', '') }}/'+country,
                dataType: 'json',
                cache: true,
                delay: 200,
                data: function(params) {
                    return {
                        term: params.term || '',
                        page: params.page || 1
                    }
                },
            }
        });
    });

    $('body').on('change', '#state', function(){
        var state = $(this).val();
        $('#district').select2({
            placeholder: 'Choose District',
            allowClear: true,
            ajax: {
                url: '{{ route('admin.common.district.list', '') }}/'+state,
                dataType: 'json',
                cache: true,
                delay: 200,
                data: function(params) {
                    return {
                        term: params.term || '',
                        page: params.page || 1
                    }
                },
            }
        });
    });




    $('body').on('change', '.country_name', function(){
        var country = $(this).val();
        $('#state_name').select2({
            placeholder: 'Choose State',
            allowClear: true,
            ajax: {
                url: '{{ route('admin.common.state.list', '') }}/'+country,
                dataType: 'json',
                cache: true,
                delay: 200,
                data: function(params) {
                    return {
                        term: params.term || '',
                        page: params.page || 1
                    }
                },
            }
        });
    });

    $('body').on('change', '#state_name', function(){
        var state = $(this).val();
        $('#district_name').select2({
            placeholder: 'Choose District',
            allowClear: true,
            ajax: {
                url: '{{ route('admin.common.district.list', '') }}/'+state,
                dataType: 'json',
                cache: true,
                delay: 200,
                data: function(params) {
                    return {
                        term: params.term || '',
                        page: params.page || 1
                    }
                },
            }
        });
    });
</script>


@endpush