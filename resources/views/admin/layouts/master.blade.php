<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default" data-bs-theme="light" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default" data-body-image="none" data-sidebar-visibility="show">
<head>

    <meta charset="utf-8" />
    <title>{{get_app_setting('app_name')}} | {{Str::title(str_replace('-', ' ', request()->segment(2)))}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesbrand" name="author" />
    {{-- <link rel="manifest" href="/manifest.json"> --}}

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset(get_app_setting('favicon')??'admin-assets/images/favicon.png')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('links')
    <!-- Layout config Js -->
    <script src="{{asset('admin-assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('admin-assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->

    <link href="{{asset('admin-assets/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    
    <link href="{{asset('admin-assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admin-assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin-assets/libs/glightbox/css/glightbox.min.css')}}">
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

     @include('admin.layouts.header')
     <!-- ========== App Menu ========== -->
     @include('admin.layouts.aside')
     <!-- Left Sidebar End -->
     <!-- Vertical Overlay-->
     <div class="vertical-overlay"></div>

     <!-- ============================================================== -->
     <!-- Start right Content here -->
     <!-- ============================================================== -->
     <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @section('main')
                @show 
                <!-- End Page-content -->
            </div>
        </div>

        @include('admin.layouts.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@yield('filter')

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->


<div id="preloader">
    <div id="loder-status">
        <div class="spinner-border text-primary avatar-sm" role="loder-status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>


@include('admin.media.media-files')
@include('admin.layouts.shortcut')

<!-- Theme Settings -->

<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to delete this data ?</p>
                    </div>
                    <input type="hidden" id="deleteURL" value="">
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger " id="deleteData">Yes, Delete It!</button>
                    <button type="button" class="btn btn-danger btn-load d-none" id="loadingBtn">
                        <span class="d-flex align-items-center">
                            <span class="spinner-grow flex-shrink-0" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                            <span class="flex-grow-1 ms-2">
                                Loading...
                            </span>
                        </span>
                    </button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<div class="modal fade zoomIn" id="dataSave" tabindex="-1" aria-labelledby="dataSaveLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-success-subtle">
                <h5 class="modal-title" id="dataSaveLabel">Create File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" id="addFileBtn-close" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="addForm">
                
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JAVASCRIPT -->
<script src="{{asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('admin-assets/libs/dropzone/dropzone-min.js')}}"></script>
<script src="{{asset('admin-assets/js/custom.js')}}"></script>
<script src="{{asset('admin-assets/js/media.js')}}"></script>
<script src="{{asset('admin-assets/js/crudAjax.js')}}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="{{asset('admin-assets/libs/glightbox/js/glightbox.min.js')}}"></script>
@if (Session::has('message'))
<script type="text/javascript">
    Toastify({
        text: "{{Session::get('message')}}",
        duration: 3000,
        close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                className: "{{Session::get('class')}}",

            }).showToast();
        </script>
        @endif
        <!-- App js -->

        <script type="text/javascript">
           const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    </script>
    @stack('scripts')


    <script src="{{asset('admin-assets/js/app.js')}}"></script>
    <script type="text/javascript">

        function deleteAjax(){  
            var url = $('#deleteURL').val();
            $.ajax({
                url:url,
                method: 'post',
                data:{'_method':'DELETE','_token':'{{ csrf_token() }}'},
                dataType:'json',
                success:function(response){
                    if(response.class){
                        $('#removeItemModal').modal('hide');
                        $('#deleteData').removeClass('d-none');
                        $('#loadingBtn').addClass('d-none');
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            className: response.class,
                        }).showToast();
                        $('.datatable').DataTable().draw('page');
                    }
                }
            });

            
        }



        function deleteModel(url){
            $('#removeItemModal').modal('show');
            $('#deleteURL').val(url);
        }
        $('#removeItemModal').on('hidden.bs.modal', function () {
            $('#deleteURL').val('');
        });
        $('body').on('click', '#deleteData', function(){
            $('#loadingBtn').removeClass('d-none');
            $('#deleteData').addClass('d-none');
            deleteAjax();
        });
        function updateData(url,data={},callback=null){  
            if (confirm('Are you sure to perform this action')){                      
                $.ajax({
                    url:url,
                    method: 'post',
                    data:Object.assign({'_method':'PUT','_token':'{{ csrf_token() }}'},data),
                    dataType:'json',

                    success:function(response){
                        if(response.class){
                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        className: response.class,
                    }).showToast();
                        }

                        if(typeof callback == 'function'){
                            callback(response);
                        }

                        if(document.getElementsByClassName('datatable').length){
                            $('.datatable').DataTable().draw('page');
                        }
                        else{
                            setTimeout(function(){
                                window.location.reload();
                            }, 300)
                        }
                    }
                });

            } 
            return false;
        }

        function cancelData(url,data={},callback=null){  
            if (confirm('Are you sure to perform this action')){                      
                $.ajax({
                    url:url,
                    method: 'post',
                    data:Object.assign({'_method':'PUT','_token':'{{ csrf_token() }}'},data),
                    dataType:'json',

                    success:function(response){
                        if(response.class){
                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        className: response.class,
                    }).showToast();
                        }

                        if(typeof callback == 'function'){
                            callback(response);
                        }

                        if(document.getElementsByClassName('datatable').length){
                            $('.datatable').DataTable().draw('page');
                        }
                        else{
                            setTimeout(function(){
                                window.location.reload();
                            }, 300)
                        }
                    }
                });

            } 
            return false;
        }
    </script>

    <script type="text/javascript">
        var previewTemplate, dropzone, dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
        dropzonePreviewNode.id = "", dropzonePreviewNode && (previewTemplate = dropzonePreviewNode.parentNode.innerHTML,
            dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode), dropzone = new Dropzone(".dropzone", {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.media.store') }}",
                method: "post",
                previewTemplate: previewTemplate,
                previewsContainer: "#dropzone-preview",
                addRemoveLinks: false,
                success: function(file, response) {
                    $('#mediafiles-list').html('');
                    setTimeout(function() {
                        mediafiles(1);
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        className: response.class,

                    }).showToast();
                    }, 1500);
                },
                error: function(file, response) {
                    return false;
                }
            }));
        </script>
    </body>
    </html>