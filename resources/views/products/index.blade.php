@extends('layouts.app')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto mt-6">
        <div  class="flex items-baseline justify-between">
            <h2 class="text-gray-700 font-bold text-xl">All Products</h2>
            <small class="text-gray-400">{{ $items->count() }} Products</small>
        </div>
        <div class="mx-2 mt-6 px-2 flex flex-wrap justify-around">
            @if($items->count())
                @foreach($items as $item)
                    <a href="{{ $item->url() }}" class="bg-white mx-2 w-64 mb-6 border shadow hover:shadow-2xl">
                        <img class="w-full block" src="/storage/{{ $item->displayImage()->thumb_url }}"
                             alt="{{ $item->displayImage()->alt }}"/>
                        <div class="m-2">
                            <div class="text-gray-700">{{ $item->name }}</div>
                            <div class="text-xs text-gray-500 flex justify-between mt-4">
                                <span>KSH {{ $item->cost }}</span>
                                <span><span class="text-orange-500">{{ $item->stock }}</span> items in stock</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <div class="w-full text-xs text-center text-gray-500">No Items Found In the database</div>
            @endif
        </div>
    </div>

@endsection
