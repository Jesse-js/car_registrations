<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>
    <button type="button" class=" mt-2 ml-5 btn btn-success">New</button>
    <div class="card mt-3 ml-5" style="width: 18rem;">
        <img src="{{ asset('img/fiat.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <span class="d-flex justify-content-between">
                <a href="#" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </span>
        </div>
    </div>

</x-app-layout>
