{{ html()->form('POST', route('admin.business-categories.store'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ html()->label('Name', 'name') }}
        {{ html()->text('name')->class('form-control')->placeholder('Name') }}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {{ html()->label('Description', 'description') }}
        {{ html()->text('description')->class('form-control')->placeholder('Description') }}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        {{ html()->label('Status', 'status') }}
        {{ html()->select('status', App\Models\Status::whereIn('id', [14,15])->pluck('name', 'id'))->class('form-control js-choice')->placeholder('Chosse Status') }}
        <small class="text-danger">{{ $errors->first('status') }}</small>
    </div>

    {{ html()->button('Save Category')->type('button')->class('btn btn-success store') }}
{{ html()->form()->close() }}