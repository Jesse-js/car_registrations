<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>
    <div class="bg-white border-b border-gray-100 mx-20 my-3 py-2 px-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            @method('POST')
            <x-category-form name="" description=""/>
        </form>
    </div>
</x-app-layout>
