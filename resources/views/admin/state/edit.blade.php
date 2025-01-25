{!! html()->form('PUT', route('admin.state.update', $state->id))->id('updateForm')->attribute('files', true)->open() !!}

 <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
     {{ html()->label('Country', 'country') }}
     {{ html()->select('country', App\Models\Country::where('id', $state->country_id)->pluck('name', 'id'), $state->country_id)->class('form-control country')->placeholder('Choose Country') }}
     <small class="text-danger">{{ $errors->first('country') }}</small>
 </div>

 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
     {{ html()->label('Name', 'name') }}
     {{ html()->text('name', $state->name)->class('form-control')->placeholder('State Name') }}
     <small class="text-danger">{{ $errors->first('name') }}</small>
 </div>

 <div class="form-group{{ $errors->has('short_name') ? ' has-error' : '' }}">
     {{ html()->label('Short Name', 'short_name') }}
     {{ html()->text('short_name', $state->short_name)->class('form-control')->placeholder('State Short Name') }}
     <small class="text-danger">{{ $errors->first('short_name') }}</small>
 </div>


{{ html()->button('Update Country')->type('button')->class('update btn btn-success') }}


{{ html()->form()->close() }}