<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="bg-white border-b border-gray-100 mx-20 my-3 py-2 px-4">
        <x-category-form :name="$category->name" :description="$category->description" :readonly="true" />
    </div>
</x-app-layout>
