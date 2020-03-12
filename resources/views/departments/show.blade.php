@extends('layouts.app')

@section('page', ucfirst($department->name) . ' Department')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <div>
            <h1 class="text-xl font-bold">{{ $department->name }}</h1>
            <div class="text-gray-500">{{ $department->description }}</div>
        </div>

        <div>
            <h1 class="text-lg font-bold mt-4">Sub Departments</h1>
            <a class="text-orange-500 inline-block mt-2" href="{{ route('sub-department.create', $department) }}">Create New Sub Department</a>
            @if($department->subDepartments->count())

                <div class="border rounded border-gray-200 p-2">
                    <table class="table-auto w-full">
                        <thead>
                        <tr class="bg-orange-300">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($department->subDepartments as $subDepartment)
                            <tr>
                                <td class="border px-4 py-2">{{ $subDepartment->id }}</td>
                                <td class="border px-4 py-2">{{ $subDepartment->name }}</td>
                                <td class="border px-4 py-2">{{ $subDepartment->description }}</td>
                                <td class="border px-4 py-2">
                                    <a class="text-xs p-1 bg-orange-500 border rounded" href="#">View</a>
                                    <a class="text-xs p-1 bg-orange-500 border rounded" href="#">Edit</a>
                                    <a class="text-xs p-1 bg-orange-500 border rounded" href="#">Delete</a>
                                    <a class="text-xs p-1 bg-orange-500 border rounded" href="#">Add Item</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>

@endsection
