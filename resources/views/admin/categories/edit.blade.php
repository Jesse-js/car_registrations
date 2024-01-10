<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <div class="bg-white border-b border-gray-100 mx-20 my-3 py-2 px-4">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <x-category-form :name="$category->name" :description="$category->description"/>
        </form>
    </div>
</x-app-layout>