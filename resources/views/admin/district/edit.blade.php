{!! html()->form('PUT', route('admin.district.update', $district->id))->id('updateForm')->attribute('files', true)->open() !!}

 <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
     {{ html()->label('Country', 'country') }}
     {{ html()->select('country', App\Models\Country::where('id', $district->state->country_id)->pluck('name', 'id'), $district->state->country_id)->class('form-control country')->placeholder('Choose Country') }}
     <small class="text-danger">{{ $errors->first('country') }}</small>
 </div>


    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
        {{ html()->label('State', 'state') }}
        {{ html()->select('state', App\Models\State::where('id', $district->state_id)->pluck('name', 'id'), $district->state_id)->class('form-control state')->placeholder('Choose State') }}
        <small class="text-danger">{{ $errors->first('State') }}</small>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ html()->label('Name', 'name') }}
        {{ html()->text('name', $district->name)->class('form-control')->placeholder('District Name') }}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>


{{ html()->button('Update District')->type('button')->class('update btn btn-success') }}


{{ html()->form()->close() }}