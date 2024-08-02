@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    
    <script src="{{ asset('js/Gradient.js') }}" ></script>

    <div class="hero-background">
        <canvas id="gradient-canvas"></canvas>
    </div>

    <div class="main-hero">
        <div class="main-container">
            <div class="container-col">
                <button>Sign in now and get exclusive access to discounts</button>
                <div class="tagline">Where Every Bean Tells a Story and Every Sip Delivers Perfection.</div>
            </div>
            <div class="container-col">
                <div class="hero-image"></div>
            </div>
        </div>
    </div>
    
    <script>
        var gradient = new Gradient()
        gradient.initGradient('#gradient-canvas');
    </script>

@endsection