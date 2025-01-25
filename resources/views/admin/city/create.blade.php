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