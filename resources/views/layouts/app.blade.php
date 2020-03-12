<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page', 'Home') - {{ config('app.name', 'Tripple E Electronics') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @yield('content')
</div>

<footer class="bg-white py-6">

    <div class="container flex flex-col md:flex-row mx-auto items-center md:justify-around">
        <div class="text-center md:text-left my-2">
            <h2 class="text-lg font-bold text-gray-900">Shop</h2>
            <div class="flex flex-col">
                <a class="text-xs text-gray-700">Daily Deals</a>
                <a class="text-xs text-gray-700">App Only Deals</a>
                <a class="text-xs text-gray-700">Clearance Sale</a>
                <a class="text-xs text-gray-700">Gift Vouchers</a>
            </div>
        </div>

        <div  class="text-center md:text-left my-2">
            <h2  class="text-lg font-bold text-gray-900">Help</h2>
            <div class="flex flex-col">
                <a class="text-xs text-gray-700">Contact Us</a>
                <a class="text-xs text-gray-700">Submit An Idea</a>
                <a class="text-xs text-gray-700">Suggest A Product</a>
                <a class="text-xs text-gray-700">Help</a>
                <a class="text-xs text-gray-700">Shipping and Delivery</a>
                <a class="text-xs text-gray-700">Exchange and Return</a>
                <a class="text-xs text-gray-700">Direction warehouse</a>
            </div>
        </div>

        <div class="text-center md:text-left my-2">
            <h2  class="text-lg font-bold text-gray-900">Account</h2>
            <div class="flex flex-col">
                <a class="text-xs text-gray-700">My Account</a>
                <a class="text-xs text-gray-700">Track Order</a>
                <a class="text-xs text-gray-700">Exchange & Returns</a>
                <a class="text-xs text-gray-700">Help</a>
                <a class="text-xs text-gray-700">Personal Details</a>
                <a class="text-xs text-gray-700">Invoices</a>
            </div>
        </div>

        <div class="text-center md:text-left my-2">
            <h2  class="text-lg font-bold text-gray-900">Company</h2>
            <div class="flex flex-col">
                <a class="text-xs text-gray-700">About Us</a>
                <a class="text-xs text-gray-700">Careers</a>
                <a class="text-xs text-gray-700">Press And News</a>
                <a class="text-xs text-gray-700">Terms & Conditions</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center py-4"><small>Copyright &copy; All rights reserved 2020 by {{ config('app.name') }}</small></div>

</footer>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
