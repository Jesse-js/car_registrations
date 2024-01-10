<div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" value="{{ $name ?? '' }}" id="" class="form-control" {{ $readonly ? 'readonly' : '' }} required>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <textarea name="description" id="" cols="30" rows="5" class="form-control" {{ $readonly ? 'readonly' : '' }} required>{{ $description ?? '' }}</textarea>
</div>
<div class="d-flex justify-content-evenly">
    <button type="submit" class="btn btn-success {{ $readonly ? 'd-none' : ''}}" >Save</button>
    <a href="{{ route('admin.categories.index') }}" class="{{ $readonly ? 'btn btn-primary' : 'btn btn-danger'}}">
        {{ $readonly ? 'Return' : 'Cancel'}}
    </a>
</div>
