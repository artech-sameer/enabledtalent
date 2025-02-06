<?php $__env->startPush('links'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/dropify-master/dist/css/dropify.min.css')); ?>">
<?php $__env->stopPush(); ?>


<?php $__env->startSection('main'); ?>
<!-- employer-dashboard -->
<div class="user-profile py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

                <?php echo $__env->make('company.layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            </div>
            <div class="col-lg-9">

                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">Account Details</h4>
                        <div class="col-lg-12">
                            <div class="profile-form">
                                <?php echo e(html()->form('POST', route('company.details.detail.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open()); ?>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Name', 'name')); ?>

                                            <?php echo e(html()->text('name', $company->name)->class('form-control')->placeholder('Name')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Email', 'email')); ?>

                                            <?php echo e(html()->email('email', $company->email)->class('form-control')->placeholder('Email')->attribute('readonly')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                                        </div>
                                    </div>



                                </div>



                                
                                <?php echo e(html()->form()->close()); ?>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">About Company</h4>
                        <div class="col-lg-12">
                            <div class="profile-form">
                                <?php echo e(html()->form('POST', route('company.details.detail.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open()); ?>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('company_name') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Company Name', 'company_name')); ?>

                                            <?php echo e(html()->text('company_name', $company->details->company_name)->class('form-control')->placeholder('Company Name')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('company_name')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Email', 'email')); ?>

                                            <?php echo e(html()->email('email', $company->details->email)->class('form-control')->placeholder('Email')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('mobile_no') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Mobile No.', 'mobile_no')); ?>

                                            <?php echo e(html()->text('mobile_no', $company->details->mobile)->class('form-control')->placeholder('Mobile No.')->attribute('maxlength', 12)->attribute('oninput', "this.value=this.value.replace(/[^0-9]/g,'')")); ?>

                                            <small class="text-danger"><?php echo e($errors->first('mobile_no')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('industry') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Industry', 'industry')); ?>

                                            <?php echo e(html()->select('industry', App\Models\Industry::where('id', $company->details->industry_id)->pluck('name', 'id'), $company->details->industry_id)->class('form-control')->placeholder('Industry')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('industry')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('company_size') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Company Size', 'company_size')); ?>

                                            <?php echo e(html()->select('company_size', ['0-5' => '0-5', '5-10' => '5-10', '10-20'=>'10-20', '20-50'=>'20-50', '50-100' =>'50-100', 'above 100' => 'above 100' ], $company->details->company_size)->class('form-control')->placeholder('Company Size')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('company_size')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('website') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Website', 'website')); ?>

                                            <?php echo e(html()->text('website', $company->details->website_url)->class('form-control')->placeholder('Website')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('website')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12">
                                        <div class="form-group<?php echo e($errors->has('registration_number') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Registration Number', 'registration_number')); ?>

                                            <?php echo e(html()->text('registration_number', $company->details->registration_number)->class('form-control')->placeholder('Registration Number')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('registration_number')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('logo') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Logo', 'logo')); ?>

                                            <?php echo e(html()->file('logo', $company->details->logo)->class('dropify form-control')->attributes(['data-height' => 150, 'data-default-file' => asset($company->details->logo) ])); ?>

                                            <small class="text-danger"><?php echo e($errors->first('logo')); ?></small>
                                        </div>
                                    </div>


                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Bio', 'bio')); ?>

                                            <?php echo e(html()->textarea('bio', $company->details->bio)->class('form-control')->placeholder('Bio')->attribute('rows', 6)); ?>

                                            <small class="text-danger"><?php echo e($errors->first('bio')); ?></small>
                                        </div>
                                    </div>
                                </div>



                                <?php echo e(html()->button('Save Data')->type('button')->class('btn btn-primary')->attribute('onclick = store(this)')); ?>

                                <?php echo e(html()->form()->close()); ?>


                            </div>
                        </div>
                    </div>
                </div>




                <div class="user-profile-wrapper">
                    <div class="user-profile-card">
                        <h4 class="user-profile-card-title">Contact Info</h4>
                        <div class="col-lg-12">
                            <div class="profile-form">
                               <?php echo e(html()->form('POST', route('company.details.contact.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open()); ?>

                               <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Country', 'country')); ?>

                                            <?php echo e(html()->select('country', App\Models\Country::where('id', $company->details->country_id)->pluck('name', 'id'), $company->details->country_id)->class('form-control')->placeholder('Choose  Country')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('country')); ?></small>
                                        </div>
                                    </div>


                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('State', 'state')); ?>

                                            <?php echo e(html()->select('state', App\Models\State::where('id', $company->details->state_id)->pluck('name', 'id'), $company->details->state_id)->class('form-control')->placeholder('State')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('state')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('district') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('District', 'district')); ?>

                                            <?php echo e(html()->select('district', App\Models\District::where('id', $company->details->district_id)->pluck('name', 'id'), $company->details->district_id)->class('form-control')->placeholder('District')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('district')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('City', 'city')); ?>

                                            <?php echo e(html()->select('city', App\Models\City::where('id', $company->details->city_id)->pluck('name', 'id'), $company->details->city_id)->class('form-control')->placeholder('City')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('city')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('pincode') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Pincode', 'pincode')); ?>

                                            <?php echo e(html()->text('pincode', $company->details->pincode)->class('form-control')->placeholder('Pincode')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('pincode')); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                            <?php echo e(html()->label('Address', 'address')); ?>

                                            <?php echo e(html()->text('address',  $company->details->address)->class('form-control')->placeholder('Address')); ?>

                                            <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
                                        </div>
                                    </div>

                                </div>
                               
                               <?php echo e(html()->button('Save Data')->type('button')->class('btn btn-primary')->attribute('onclick = store(this)')); ?>

                               <?php echo e(html()->form()->close()); ?>

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


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/dropify-master/dist/js/dropify.min.js')); ?>"></script>
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


  
    $('#industry').select2({
        placeholder: 'Choose Industry',
        allowClear: true,
        ajax: {
            url: '<?php echo e(route('web.common.company.industries')); ?>',
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
  
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a logo here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            //'error':   'Ooops, something wrong happended.'
        }
    });
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('common.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/company/details.blade.php ENDPATH**/ ?>