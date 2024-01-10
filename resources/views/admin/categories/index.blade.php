<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success ml-5">New</a>
    <div class="px-6">
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-primary mr-2">View</a>
                            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning mr-2">Edit</a>
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Tem certeza que deseja apagar o registro?')">
                                    Delete
                                </a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="4">No categories found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</x-app-layout>
