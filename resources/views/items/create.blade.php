@extends('layouts.app')

@section('page', 'Add Item')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <h2 class="text-xl text-center font-bold text-gray-700">Creating New Item</h2>

        <div class="w-2/3 mx-auto">
            <form action="{{ route('items.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="flex flex-col">
                    <label class="font-bold text-lg text-gray-700" for="name">Name</label>
                    <input class="border p-2 @error('name') border-red-500 @enderror"
                           type="text" name="name" id="name"
                           value="{{ old('name') }}"
                           placeholder="Enter the Name Here..."/>
                    <span class="text-gray-400 text-xs">A full descriptive name of the Item</span>

                    @error('name')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="font-bold text-lg text-gray-700" for="cost">Cost</label>
                    <input class="border p-2 @error('cost') border-red-500 @enderror"
                           type="text" name="cost" id="cost"
                           value="{{ old('cost') }}"
                           placeholder="Enter the Cost Here..."/>
                    <span class="text-gray-400 text-xs">Price tag or cost of the item in reference</span>

                    @error('cost')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="text-lg font-bold text-gray-700" for="description">Description</label>
                    <textarea class="border p-2 @error('description') border-red-500 @enderror"
                              name="description"
                              id="description" cols="50" rows="5"
                              placeholder="Enter the description here...">{{ old('description') }}</textarea>
                    <span class="text-gray-400 text-xs">Description of how the item looks like (should be able to convince a viewer to come for item)</span>

                    @error('description')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="font-bold text-lg text-gray-700" for="stock">Stock</label>
                    <input class="border p-2 @error('stock') border-red-500 @enderror"
                           type="number" name="stock" id="stock"
                           value="{{ old('stock') }}"
                           placeholder="Enter the Count Here..."/>
                    <span class="text-gray-400 text-xs">Price tag or cost of the item in reference</span>

                    @error('stock')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="text-lg font-bold text-gray-700" for="store_location">Location Description</label>
                    <textarea class="border p-2 @error('store_location') border-red-500 @enderror"
                              name="store_location"
                              id="store_location" cols="50" rows="5"
                              placeholder="Enter the store location description here...">{{ old('store_location') }}</textarea>
                    <span
                        class="text-gray-400 text-xs">Description of how to get item in the store (should be precise)</span>

                    @error('store_location')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="font-bold text-lg text-gray-700" for="sub_department_id">Sub Department</label>
                    <select class="border bg-white p-2 @error('sub_department_id') border-red-500 @enderror"
                            name="sub_department_id" id="sub_department_id">
                        <option value="">-- Sub Department --</option>
                        @foreach($sub_departments as $sub_department)
                            <option value="{{ $sub_department->id }}" {{ old('sub_department_id') == $sub_department->id ? 'selected' : '' }}>{{ $sub_department->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-gray-400 text-xs">Price tag or cost of the item in reference</span>
                    @error('sub_department_id')
                        <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-6">
                    <label class="font-bold text-lg text-gray-700" for="stock">Images</label>
                    <input class="border p-2 @error('images') border-red-500 @enderror"
                           type="file" name="images[]" id="images" multiple
                           placeholder="Enter the Count Here..."/>
                    <span class="text-gray-400 text-xs">Upload image(s) for the item</span>

                    @error('images.*')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="clearfix my-6">
                    <button class="border py-2 px-3 float-right bg-orange-500" type="submit">Add Item</button>
                </div>

            </form>

        </div>
    </div>
@endsection
