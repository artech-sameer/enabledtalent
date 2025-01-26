@extends('common.layouts.master')
@push('links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush


@section('main')
<!-- employer-dashboard -->
<div class="user-profile py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

                @include('company.layouts.aside')


            </div>
            <div class="col-lg-9">


                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">About Company</h4>
                        <div class="col-lg-12">
                            <div class="profile-form">
                                {{ html()->form('POST', route('company.details.detail.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                            {{ html()->label('Company Name', 'company_name') }}
                                            {{ html()->text('company_name', $company->name)->class('form-control')->placeholder('Company Name') }}
                                            <small class="text-danger">{{ $errors->first('company_name') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            {{ html()->label('Email', 'email') }}
                                            {{ html()->email('email', $company->email)->class('form-control')->placeholder('Email')->attribute('readonly') }}
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                                            {{ html()->label('Mobile No.', 'mobile_no') }}
                                            {{ html()->text('mobile_no', $company->mobile)->class('form-control')->placeholder('Mobile No.')->attribute('maxlength', 12)->attribute('oninput', "this.value=this.value.replace(/[^0-9]/g,'')")
                                            }}
                                            <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('business_category') ? ' has-error' : '' }}">
                                            {{ html()->label('Business Category', 'business_category') }}
                                            {{ html()->select('business_category', App\Models\BusinessCategory::where('id', $company->details->business_category_id)->pluck('name', 'id'), $company->details->business_category_id)->class('form-control')->placeholder('Business Category') }}
                                            <small class="text-danger">{{ $errors->first('business_category') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('employee_strength') ? ' has-error' : '' }}">
                                            {{ html()->label('Employee Strength', 'employee_strength') }}
                                            {{ html()->select('employee_strength', ['0-5' => '0-5', '5-10' => '5-10', '10-20'=>'10-20', '20-50'=>'20-50', '50-100' =>'50-100', 'above 100' => 'above 100' ], $company->details->employee_strength)->class('form-control')->placeholder('Employee Strength') }}
                                            <small class="text-danger">{{ $errors->first('employee_strength') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                            {{ html()->label('Website', 'website') }}
                                            {{ html()->text('website', $company->details->website)->class('form-control')->placeholder('Website') }}
                                            <small class="text-danger">{{ $errors->first('website') }}</small>
                                        </div>
                                    </div>


                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                                            {{ html()->label('Bio', 'bio') }}
                                            {{ html()->textarea('bio', $company->details->bio)->class('form-control')->placeholder('Bio') }}
                                            <small class="text-danger">{{ $errors->first('bio') }}</small>
                                        </div>
                                    </div>
                                </div>



                                {{ html()->button('Save Data')->type('button')->class('btn btn-primary')->attribute('onclick = store(this)') }}
                                {{ html()->form()->close() }}

                            </div>
                        </div>
                    </div>
                </div>




                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">Contact Info</h4>
                        <div class="col-lg-12">
                            <div class="profile-form">
                               {{ html()->form('POST', route('company.details.contact.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}
                               <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                            {{ html()->label('Country', 'country') }}
                                            {{ html()->select('country', [])->class('form-control')->placeholder('Choose  Country') }}
                                            <small class="text-danger">{{ $errors->first('country') }}</small>
                                        </div>
                                    </div>


                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                            {{ html()->label('State', 'state') }}
                                            {{ html()->select('state', [])->class('form-control')->placeholder('State') }}
                                            <small class="text-danger">{{ $errors->first('state') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                                            {{ html()->label('District', 'district') }}
                                            {{ html()->select('district', [])->class('form-control')->placeholder('District') }}
                                            <small class="text-danger">{{ $errors->first('district') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                            {{ html()->label('City', 'city') }}
                                            {{ html()->select('city', [])->class('form-control')->placeholder('City') }}
                                            <small class="text-danger">{{ $errors->first('city') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                                            {{ html()->label('Pincode', 'pincode') }}
                                            {{ html()->text('pincode')->class('form-control')->placeholder('Pincode') }}
                                            <small class="text-danger">{{ $errors->first('pincode') }}</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            {{ html()->label('Address', 'address') }}
                                            {{ html()->text('address')->class('form-control')->placeholder('Address') }}
                                            <small class="text-danger">{{ $errors->first('address') }}</small>
                                        </div>
                                    </div>

                                </div>
                               
                               {{ html()->button('Save Data')->type('button')->class('btn btn-primary')->attribute('onclick = store(this)') }}
                               {{ html()->form()->close() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">Social Network</h4>
                        <div class="col-lg-6">
                            <div class="profile-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- employer-dashboard end -->   


@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        getCountry('country')
    });

    $('body').on('change', '#country', function(){
        var country = $(this).val();
        $('#state, #district, #city').val(null).trigger('change');
        getState('state', country)
    });


    $('body').on('change', '#state', function(){
        var state = $(this).val();
        $('#district, #city').val(null).trigger('change');
        getDistrict('district', state)
    });

    $('body').on('change', '#district', function(){
        var district = $(this).val();
        $('#city').val(null).trigger('change');
        getCity('city', district)
    });


  
    $('#business_category').select2({
        placeholder: 'Choose Category',
        allowClear: true,
        ajax: {
            url: '{{ route('web.common.company.business.category') }}',
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
  
</script>
@endpush