{!! html()->form('PUT', route('admin.business-categories.update', $business_category->id))->id('updateForm')->attribute('files', true)->open() !!}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ html()->label('Name', 'name') }}
        {{ html()->text('name', $business_category->name)->class('form-control')->placeholder('Name') }}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {{ html()->label('Description', 'description') }}
        {{ html()->text('description', $business_category->description)->class('form-control')->placeholder('Description') }}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        {{ html()->label('Status', 'status') }}
        {{ html()->select('status', App\Models\Status::whereIn('id', [14,15])->pluck('name', 'id'), $business_category->status_id)->class('form-control js-choice')->placeholder('Chosse Status') }}
        <small class="text-danger">{{ $errors->first('status') }}</small>
    </div>



{{ html()->button('Update Category')->type('button')->class('update btn btn-success') }}


{{ html()->form()->close() }}