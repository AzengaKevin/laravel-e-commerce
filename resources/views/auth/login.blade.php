@extends('layouts.app')

@section('page', 'Login')
@section('content')
    <div class="h-screen w-screen flex items-center justify-center bg-gray-100">
        <div class="w-2/5 p-4">
            <h1 class="text-center text-orange-500 font-bold text-2xl"><a
                    href="{{ route('home') }}">{{ config('app.name', 'trpple-e-electronics') }}</a></h1>
            <div class="text-center text-gray-500">Login to the application</div>

            <div class="w-full bg-white p-4 mt-6">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="flex flex-col">
                        <label for="email" class="font-bold text-gray-700">Email</label>
                        <input class="border border-gray-200 text-gray-600 p-2 @error('email') border-red-500 @enderror"
                               type="email" name="email" id="email"
                               value="{{ old('email') }}"
                               placeholder="example@test.xyz">
                        <span class="text-gray-400 text-xs">Your unique username to app</span>
                        @error('email')
                        <span class="text-gray-400 text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex mt-6 flex-col">
                        <label for="password" class="font-bold text-gray-700">Password</label>
                        <input
                            class="border border-gray-500 @error('password') border-red-500 @enderror text-gray-600 p-2"
                            type="password" name="password"
                            id="password" placeholder="********">
                        <span class="text-gray-400 text-xs">Your strong password</span>
                        @error('password')
                        <span class="text-gray-400 text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="remember" class="flex items-center">
                            <input class="bg-white" type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-1">Remember Me</span>
                        </label>
                        <span class="text-gray-400 text-xs">(if this is a private computer)</span>
                    </div>

                    <button class="w-full mt-6 py-2 bg-orange-500 hover:bg-gray-300" type="submit">Login</button>
                    <a class="block w-full bg-orange-500 text-center py-2 mt-1 hover:bg-gray-300"
                       href="{{ route('register') }}">Register</a>

                </form>
            </div>
        </div>
    </div>
@endsection
