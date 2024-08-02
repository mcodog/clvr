<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('layouts.partials.fonts')
        @include('layouts.partials.cdn')

        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <title>CLVR</title>

    </head>
        @include('layouts.partials.header')

    <body>
        
        @yield('content')
        
    </body>

    <footer>
        @include('layouts.partials.footer')
    </footer>