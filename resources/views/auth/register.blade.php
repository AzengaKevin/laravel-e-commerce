@extends('layouts.app')

@section('page', 'Register')
@section('content')
    <div class="h-screen w-screen flex items-center justify-center bg-gray-100">
        <div class="w-2/5 p-4">
            <h1 class="text-center text-orange-500 font-bold text-2xl"><a
                    href="{{ route('home') }}">{{ config('app.name', 'trpple-e-electronics') }}</a></h1>
            <div class="text-center text-gray-500">Register to the application</div>

            <div class="w-full bg-white p-4 mt-6">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="font-bold text-gray-700">Name</label>
                        <input class="border border-gray-200 text-gray-500 p-2 @error('name') border-red-500 @enderror"
                               type="text" name="name" id="name"
                               value="{{ old('name') }}"
                               placeholder="Mr. Display Name">
                        <span class="text-gray-400 text-xs">Your app display name</span>
                        @error('email')
                        <span class="text-gray-400 text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="font-bold text-gray-700">Email</label>
                        <input class="border border-gray-200 text-gray-500 p-2 @error('email') border-red-500 @enderror"
                               type="email" name="email" id="email"
                               value="{{ old('email') }}"
                               placeholder="example@test.xyz">
                        <span class="text-gray-400 text-xs">Your unique username to app</span>
                        @error('email')
                        <span class="text-gray-400 text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="flex">
                            <div class="flex w-3/7 flex-col">
                                <label for="password" class="font-bold text-gray-700">Password</label>
                                <input
                                    class="border border-gray-200 text-gray-500 p-2"
                                    type="password" name="password"
                                    id="password" placeholder="********">
                                <span class="text-gray-400 text-xs">Your strong password</span>
                            </div>

                            <div class="flex ml-auto w-3/7 flex-col">
                                <label for="password-confirm" class="font-bold text-gray-700">Confirm Password</label>
                                <input
                                    class="border border-gray-200 text-gray-500 p-2"
                                    type="password" name="password_confirmation"
                                    id="password-confirm" placeholder="********">
                                <span class="text-gray-400 text-xs">Confirm your password</span>
                            </div>
                        </div>

                        @error('password')
                        <span class="text-gray-400 text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="newsletter" class="flex items-center">
                            <input class="bg-white" type="checkbox" name="newsletter"
                                   id="newsletter" {{ old('newsletter') ? 'checked' : '' }}>
                            <span class="ml-1">Sign up for our newsletter</span>
                        </label>
                        <span
                            class="text-gray-400 text-xs">(to get a newsletter notification at the end of the week)</span>
                    </div>

                    <button class="w-full mt-6 py-2 bg-orange-500 hover:bg-gray-300" type="submit">Register</button>
                    <a class="block w-full bg-orange-500 text-center py-2 mt-1 hover:bg-gray-300"
                       href="{{ route('login') }}">Login</a>

                </form>
            </div>
        </div>
    </div>
@endsection
