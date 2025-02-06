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

           {{ Breadcrumbs::render('industries') }}

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
                <div class="form-group{{ $errors->has('name_filter') ? ' has-error' : '' }}">
                    {{ html()->label('Name', 'name_filter') }}
                    <div class="search-box">
                        {{ html()->text('name_filter')->class('form-control search searchFilter')->placeholder('Name') }}
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <small class="text-danger">{{ $errors->first('name_filter') }}</small>
                </div>
            </div>



            <div class="ms-2 w-50">
               <div class="form-group{{ $errors->has('status_filter') ? ' has-error' : '' }}">
                   {{ html()->label('Status', 'status_filter') }}
                   {{ html()->select('status_filter', App\Models\Status::whereIn('id', [14,15])->pluck('name', 'id'))->class('form-control js-choice searchFilterChange') }}
                   <small class="text-danger">{{ $errors->first('status') }}</small>
               </div>
            </div>



            

        </div>
    </div>
</div>

<div class="row my-1">


    <div class="col-lg-4 col-sm-12 col-12 position-sticky">

        <div class="card">
            <div class="card-body" id="form">
             {{ html()->form('POST', route('admin.section.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {{ html()->label('Title', 'title') }}
                    {{ html()->text('title')->class('form-control')->placeholder('Title') }}
                    <small class="text-danger">{{ $errors->first('title') }}</small>
                </div>

                <div class="form-group{{ $errors->has('sub_title') ? ' has-error' : '' }}">
                    {{ html()->label('Sub Title', 'sub_title') }}
                    {{ html()->text('sub_title')->class('form-control')->placeholder('Sub Title') }}
                    <small class="text-danger">{{ $errors->first('sub_title') }}</small>
                </div>

                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    {{ html()->label('Slug', 'slug') }}
                    {{ html()->text('slug')->class('form-control')->placeholder('Slug') }}
                    <small class="text-danger">{{ $errors->first('slug') }}</small>
                </div>

                <div class="form-group{{ $errors->has('button_label') ? ' has-error' : '' }}">
                    {{ html()->label('Button Label', 'button_label') }}
                    {{ html()->text('button_label')->class('form-control')->placeholder('Button Label') }}
                    <small class="text-danger">{{ $errors->first('button_label') }}</small>
                </div>

                <div class="form-group{{ $errors->has('button_link') ? ' has-error' : '' }}">
                    {{ html()->label('Button Link', 'button_link') }}
                    {{ html()->text('button_link')->class('form-control')->placeholder('Button Link') }}
                    <small class="text-danger">{{ $errors->first('button_link') }}</small>
                </div>


                {{ html()->button('Save Section')->type('button')->class('btn btn-success store') }}
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
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Subtitle</th>
                                @can(['edit_section','delete_section'])
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
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script>
    $(document).ready(function() {
        $(".js-choice").each(function() {
            new Choices($(this)[0], {
                allowHTML: true,
            }); 
        });
    });
</script>
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
                d.name = $('#name_filter').val();
                d.status = $('#status_filter').val();
            }

        },
        "columns": [
            { "data": "sn" }, 
            { "data": "title" }, 
            { "data": "slug" }, 
            { "data": "subtitle" }, 
            {
                "data": "action",
                render: function(data, type, row) {
                    if (type === 'display') {
                        var btn = '<div class="dropdown d-inline-block"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button><ul class="dropdown-menu dropdown-menu-end">';

                        @can(['edit_section','delete_section'])

                        @can('edit_section')
                        btn+='<li><button class="dropdown-item edit-item-btn" onClick="editData(\''+window.location.href+'/'+row['id']+'\')"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</button></li>';
                        @endcan

                        @can('delete_section')
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

$('body').on('keyup', '.searchFilter', function(){
    table2.draw('page');
});

$('body').on('change', '.searchFilterChange', function(){
    table2.draw('page');
});

 



    function create() {
        $.ajax({
            type: "GET",
            enctype: 'multipart/form-data',
            url:'{{ route('admin.'.request()->segment(2).'.create') }}',
            success:function(response){
                $('#form').html(response);
                $(".js-choice").each(function() {
                    new Choices($(this)[0], {
                        allowHTML: true,
                    }); 
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

    $('body').on('keyup', '.searchFilter', function(){
        table2.draw('page');
    });

    $('body').on('change', '.searchFilterChange', function(){
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

             $('#state').select2({
                placeholder: 'Choose Country',
                allowClear: true,
                ajax: {
                    url: '{{ route('admin.common.state.list', '') }}/'+$('#country').val(),
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


function slugGenerate(text){
    let slug = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    return slug;
}

$('body').on('keyup', '#title', function(){
    var text = $(this).val();
    $('#slug').val(slugGenerate(text));
});
$('body').on('change', '#slug', function(){
    var text = $(this).val();
    $('#slug').val(slugGenerate(text));
});
</script>


@endpush