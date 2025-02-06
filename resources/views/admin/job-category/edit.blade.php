{!! html()->form('PUT', route('admin.job-categories.update', $job_category->id))->id('updateForm')->attribute('files', true)->open() !!}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ html()->label('Name', 'name') }}
        {{ html()->text('name', $job_category->name)->class('form-control')->placeholder('Name') }}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {{ html()->label('Description', 'description') }}
        {{ html()->text('description', $job_category->description)->class('form-control')->placeholder('Description') }}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>

    <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
        {{ html()->label('Icon', 'icon') }}
        {{ html()->text('icon', $job_category->icon)->class('form-control')->placeholder('Icon') }}
        <small class="text-danger">{{ $errors->first('icon') }}</small>
    </div>

    <div class="form-group{{ $errors->has('featured') ? ' has-error' : '' }}">
        {{ html()->label('Featured', 'featured') }}
        {{ html()->select('featured', [0 => 'No', 1 => 'Yes'], $job_category->featured)->class('form-control') }}
        <small class="text-danger">{{ $errors->first('featured') }}</small>
    </div>

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        {{ html()->label('Status', 'status') }}
        {{ html()->select('status', App\Models\Status::whereIn('id', [14,15])->pluck('name', 'id'), $job_category->status_id)->class('form-control js-choice')->placeholder('Chosse Status') }}
        <small class="text-danger">{{ $errors->first('status') }}</small>
    </div>



{{ html()->button('Update Category')->type('button')->class('update btn btn-success') }}


{{ html()->form()->close() }}