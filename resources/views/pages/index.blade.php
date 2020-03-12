@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <main class="bg-gray-100 flex h-full flex-col py-6">
        <div class="container mx-auto flex justify-around mb-12">
            <div class="w-1/5 px-4 hidden md:block">
                <div class="bg-white shadow z-10 h-full">
                    @foreach($sub_departments as $sub_department)
                        <a href="" class="block p-2 hover:bg-orange-400">{{ $sub_department->name }}</a>
                    @endforeach
                </div>
            </div>
            <carousel v-bind:adverts="{{ $adverts->toJson() }}"></carousel>
            <div class="w-1/5 px-4 relative hidden md:block">
                <div class="bg-white shadow p-2 z-10 flex flex-col justify-around h-full">
                    <div>
                        <h2 class="text-gray-700 text-lg">Great Service</h2>
                        <div class="text-xs text-gray-600">triple-e-electronics offers great service to their customers
                            in
                            terms of packaging items and even delivering them anywhere in Kisii
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-gray-700 text-lg">Great Choice</h2>
                        <div class="text-xs text-gray-600">triple-e-electronics has several electronic departments and
                            offers a wide range and variety of products
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-gray-700 text-lg">Contact</h2>
                        <div class="text-xs">
                            <div><span class="font-bold">Phone</span><span
                                    class="ml-3 text-gray-700">254700016349</span>
                            </div>
                            <div><span class="font-bold">Phone</span><span
                                    class="ml-3 text-gray-700">254700016349</span>
                            </div>
                            <div><span class="font-bold">Phone</span><span
                                    class="ml-3 text-gray-700">254700016349</span>
                            </div>
                            <div><span class="font-bold">Phone</span><span
                                    class="ml-3 text-gray-700">254700016349</span>
                            </div>
                            <div><span class="font-bold">Phone</span><span
                                    class="ml-3 text-gray-700">254700016349</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-16 h-screen">
            <h2 class="text-gray-700 font-bold text-3xl text-center">Why Shop With Tripple-E-Electronics</h2>

            <div class="container mx-auto flex flex-row h-full">
                <div class="w-1/3 flex flex-col items-center justify-center h-full text-center">
                    <h2 class="text-gray-500 font-bold text-xl">Title</h2>
                    <svg class="w-48 mt-6" viewBox="0 0 100 100">
                        <circle fill="lightgray" r="50" cx="50" cy="50"/>
                    </svg>

                    <p class="mt-12 px-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam
                        asperiores aut
                        beatae blanditiis commodi cupiditate deserunt distinctio doloremque, blanditiis commodi
                        cupiditate deserunt distinctio doloremque.</p>
                </div>
                <div class="w-1/3 flex flex-col items-center justify-center h-full text-center">
                    <h2 class="text-gray-500 font-bold text-xl">Title</h2>
                    <svg class="w-48 mt-6 fill-current" viewBox="0 0 100 100">
                        <circle fill="lightgray" r="50" cx="50" cy="50"/>
                    </svg>

                    <p class="mt-12 px-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam
                        asperiores aut
                        beatae blanditiis commodi cupiditate deserunt distinctio doloremque, blanditiis commodi
                        cupiditate deserunt distinctio doloremque.</p>
                </div>
                <div class="w-1/3 flex flex-col items-center justify-center h-full text-center">
                    <h2 class="text-gray-500 font-bold text-xl">Title</h2>
                    <svg class="w-48 mt-6 fill-current" viewBox="0 0 100 100">
                        <circle fill="lightgray" r="50" cx="50" cy="50"/>
                    </svg>

                    <p class="mt-12 px-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam
                        asperiores aut
                        beatae blanditiis commodi cupiditate deserunt distinctio doloremque, blanditiis commodi
                        cupiditate deserunt distinctio doloremque.</p>
                </div>
            </div>
        </div>

        <div class="h-screen flex flex-col justify-around">
            <h2 class="text-gray-700 font-bold text-3xl mt-6 text-center">Latest Products Updates</h2>
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

    </main>
@endsection
