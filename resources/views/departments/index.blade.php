@extends('layouts.app')

@section('page', 'Manage Departments')
@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <div class="flex justify-between items-baseline mt-2">
            <h2 class="font-bold text-lg text-gray-700">All Departments</h2>
            <a class="text-orange-500" href="{{ route('departments.create') }}">Create New Department</a>
        </div>
        @if($departments->count())
            <div class="border rounded border-gray-200 mt-6 p-2">
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

                    @foreach($departments as $department)
                        <tr>
                            <td class="border px-4 py-2">{{ $department->id }}</td>
                            <td class="border px-4 py-2">{{ $department->name }}</td>
                            <td class="border px-4 py-2">{{ $department->description }}</td>
                            <td class="border px-4 py-2">
                                <a class="text-xs p-1 bg-orange-500 border rounded" href="{{ route('departments.show', $department->id) }}">View</a>
                                <a class="text-xs p-1 bg-orange-500 border rounded" href="{{ route('departments.edit', $department->id) }}">Edit</a>
                                <a class="text-xs p-1 bg-orange-500 border rounded" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
