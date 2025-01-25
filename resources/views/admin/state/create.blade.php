{{ html()->form('POST', route('admin.state.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {{ html()->label('Country', 'country') }}
                    {{ html()->select('country', [])->class('form-control country')->placeholder('Choose Country') }}
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ html()->label('Name', 'name') }}
                    {{ html()->text('name')->class('form-control')->placeholder('State Name') }}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>

                <div class="form-group{{ $errors->has('short_name') ? ' has-error' : '' }}">
                    {{ html()->label('Short Name', 'short_name') }}
                    {{ html()->text('short_name')->class('form-control')->placeholder('State Short Name') }}
                    <small class="text-danger">{{ $errors->first('short_name') }}</small>
                </div>

                {{ html()->button('Save State')->type('button')->class('btn btn-success store') }}
            {{ html()->form()->close() }}