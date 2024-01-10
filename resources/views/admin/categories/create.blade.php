<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Return</a>
    <div class="bg-white border-b border-gray-100 mx-20 my-3 py-2 px-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            @method('POST')
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="" class="form-control">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            <div class="d-flex justify-content-evenly mt-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>