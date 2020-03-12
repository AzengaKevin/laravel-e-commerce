@extends('layouts.app')

@section('page', 'Items')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <div class="flex justify-between items-baseline mt-2">
            <h2 class="text-lg font-bold text-gray-700">All Added Products</h2>
            <a class="text-orange-500"
               href="{{ route('items.create') }}">Add New Item</a>
        </div>
        @if($items->count())
            <div class="border rounded border-gray-200 p-2 mt-6">
                <table class="table-auto w-full">
                    <thead>
                    <tr class="bg-orange-300">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Cost</th>
                        <th class="px-4 py-2">Stock</th>
                        <th class="px-4 py-2">Discount</th>
                        <th class="px-4 py-2">Sub-department</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($items as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->id }}</td>
                            <td class="border px-4 py-2">{{ $item->name }}</td>
                            <td class="border px-4 py-2">{{ $item->cost }}</td>
                            <td class="border px-4 py-2">{{ $item->stock }}</td>
                            <td class="border px-4 py-2">{{ $item->discount }}</td>
                            <td class="border px-4 py-2">{{ $item->subDepartment->name }}</td>
                            <td class="border px-4 py-2">
                                <a class="text-xs p-1 bg-orange-500 border rounded"
                                   href="{{ route('items.show', $item->id) }}">View</a>
                                <a class="text-xs p-1 bg-orange-500 border rounded"
                                   href="{{ route('items.edit', $item->id) }}">Edit</a>
                                <a class="text-xs p-1 bg-orange-500 border rounded" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h2 class="text-lg font-bold text-gray-700">No Items Added</h2>
        @endif

    </div>
@endsection
