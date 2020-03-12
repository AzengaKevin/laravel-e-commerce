@extends('layouts.app')

@section('page', $item->name)

@section('content')
    @include('partials.nav')

    <main class="bg-gray-100 py-4">
        <div class="container rounded-lg bg-white mx-auto flex">
            <div class="w-1/3 p-6">
                <img class="w-full" src="/storage/{{ $item->displayImage()->thumb_url }}" alt="{{ $item->displayImage()->alt }}">
            </div>
            <div class="w-2/3 bg-white p-6">
                <h2 class="text-gray-700 text-xl font-bold">{{ $item->name }}</h2>
                <div class="text-gray-500 text-sm">{{ $item->subDepartment->name }}</div>

                <div class="mt-6">
                    <h2 class="text-gray-700 text-xl font-bold">Cost</h2>
                    <div class="text-gray-500 text-sm">KES {{ number_format($item->cost, 2) }}</div>
                </div>

                <div class="mt-6">
                    <h2 class="text-gray-700 text-xl font-bold">Stock</h2>
                    <div class="text-gray-500 text-sm">{{ $item->stock }} Items In Store</div>
                </div>

                <div class="mt-6 w-full">
                    <h2 class="text-lg text-gray-700 font-bold">Description</h2>
                    <div class="text-gray-500">{{ $item->description }}</div>
                </div>

                <div class="mt-6 w-full">
                    <h2 class="text-lg text-gray-700 font-bold">Location</h2>
                    <div class="text-gray-500">{{ $item->store_location }}</div>
                </div>
            </div>
        </div>
    </main>
@endsection
