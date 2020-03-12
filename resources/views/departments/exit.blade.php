@extends('layouts.app')

@section('page', 'Create Department')

@section('content')
    @include('partials.nav')

    <h2 class="text-xl font-bold text-center my-2">Creating A New Department</h2>

    <div class="container mx-auto">
        <div class="w-2/3 mx-auto">
            <form action="{{ route('departments.update') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">
                    <label class="font-bold text-lg" for="name">Department Name</label>
                    <input class="border p-2 @error('name') border-red-500 @enderror"
                           type="text" name="name" id="name"
                           value="{{ old('name') ?? $department->name }}"
                           placeholder="Enter the Name Here..."/>

                    @error('name')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="text-lg font-bold" for="description">Department Description</label>
                    <textarea class="border p-2 @error('description') border-red-500 @enderror"
                              name="description"
                              id="description" cols="50" rows="5"
                              placeholder="Enter the description here...">
                        {{ old('description') ?? $department->description }}
                    </textarea>

                    @error('description')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="clearfix">
                    <button class="border py-2 px-3 mt-6 float-right bg-orange-500" type="submit">Create Department</button>
                </div>

            </form>
        </div>
    </div>
@endsection
