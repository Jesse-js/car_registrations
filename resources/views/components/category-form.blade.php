<div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" id="" class="form-control">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
</div>
<div class="d-flex justify-content-evenly">
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Cancel</a>
</div>
