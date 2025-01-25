{{ html()->form('POST', route('admin.country.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
     {{ html()->label('Name', 'name') }}
     {{ html()->text('name')->class('form-control')->placeholder('Country Name') }}
     <small class="text-danger">{{ $errors->first('name') }}</small>
 </div>

 <div class="form-group{{ $errors->has('short_name') ? ' has-error' : '' }}">
     {{ html()->label('Short Name', 'short_name') }}
     {{ html()->text('short_name')->class('form-control')->placeholder('Country Short Name') }}
     <small class="text-danger">{{ $errors->first('short_name') }}</small>
 </div>

 <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
     {{ html()->label('Code', 'code') }}
     {{ html()->text('code')->class('form-control')->placeholder('Country Code') }}
     <small class="text-danger">{{ $errors->first('code') }}</small>
 </div>

 <div class="form-group{{ $errors->has('currency_name') ? ' has-error' : '' }}">
     {{ html()->label('Currency Name', 'currency_name') }}
     {{ html()->text('currency_name')->class('form-control')->placeholder('Country Currency Name') }}
     <small class="text-danger">{{ $errors->first('currency_name') }}</small>
 </div>

 <div class="form-group{{ $errors->has('currency_symbol') ? ' has-error' : '' }}">
     {{ html()->label('Currency Symbol', 'currency_symbol') }}
     {{ html()->text('currency_symbol')->class('form-control')->placeholder('Country Currency Symbol') }}
     <small class="text-danger">{{ $errors->first('currency_symbol') }}</small>
 </div>

{{ html()->button('Save Country')->type('type')->class('store btn btn-success') }}


{{ html()->form()->close() }}
