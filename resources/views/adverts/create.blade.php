@extends('layouts.app')

@section('page', 'Create Advert')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <h2 class="font-bold text-lg text-center text-gray-700 mt-4">Add New Advert</h2>

        <form action="{{ route('adverts.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="flex flex-col">
                <label class="font-bold text-lg text-gray-700" for="message">Advert Message</label>
                <input class="border p-2 @error('message') border-red-500 @enderror"
                       type="text" name="message" id="message"
                       aria-describedby="messageHelp"
                       value="{{ old('message') }}"
                       placeholder="Enter the Advert Message Here..."/>
                <span id="messageHelp" class="text-xs text-gray-400">It will show as an overlay over the advert image on the carousel</span>
                @error('message')
                <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mt-6">
                <label class="font-bold text-lg text-gray-700" for="image">Advert Image</label>
                <input class="border p-2 @error('image') border-red-500 @enderror"
                       type="file" name="image" id="image"/>
                <span class="text-gray-400 text-xs">Upload an image for the advert</span>
                @error('image')
                <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
                @enderror
            </div>

            <div class="clearfix">
                <button class="border py-2 px-3 mt-6 float-right bg-orange-500" type="submit">Add Advert</button>
            </div>

        </form>
    </div>

@endsection
