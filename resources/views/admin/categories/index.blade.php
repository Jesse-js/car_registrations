<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">New</a>
    <div class="px-6">
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="#" class="btn btn-primary mr-2">View</a>
                            <a href="#" class="btn btn-warning mr-2">Edit</a>
                            <a href="#" class="btn btn-danger mr-2">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No categories found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</x-app-layout>
