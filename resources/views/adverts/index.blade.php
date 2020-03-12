@extends('layouts.app')

@section('page', 'All Adverts')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <div class="flex justify-between items-baseline mt-4">
            <h2 class="font-bold text-gray-700 text-lg">All Adverts</h2>
            <a class="text-orange-500" href="{{ route('adverts.create') }}">New Advert</a>
        </div>

        @if($adverts->count())
            <div class="border rounded border-gray-200 p-2 mt-6">
                <table class="table-auto text-center w-full">
                    <thead>
                    <tr class="bg-orange-300">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Message</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($adverts as $advert)
                        <tr>
                            <td class="border px-4 py-2">{{ $advert->id }}</td>
                            <td class="border px-4 py-2">{{ $advert->message }}</td>
                            <td class="border px-4 py-2 flex justify-center"><img class="w-40 h-40" src="{{ $advert->image->thumb_url }}" alt="Image"></td>
                            <td class="border px-4 py-2">

                                <form action="{{ route('adverts.destroy', $advert) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-xs p-1 bg-orange-500 border rounded" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h2 class="text-xs font-bold text-gray-500">No Adverts Added</h2>
        @endif
    </div>

@endsection
