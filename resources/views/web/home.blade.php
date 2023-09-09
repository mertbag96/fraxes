@extends('web.layout.app')
@section('content')

    <div class="carousel slide" id="slider">
        <div class="carousel-inner">
            <a href="{{ route('women') }}" class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('web/img/slider/slider1.webp') }}"  alt="Slider 1">
            </a>
            <a href="{{ route('men') }}" class="carousel-item">
                <img class="d-block w-100" src="{{ asset('web/img/slider/slider2.jpg') }}" alt="Slider 2">
            </a>
            <a href="{{ route('child') }}" class="carousel-item">
                <img class="d-block w-100" src="{{ asset('web/img/slider/slider3.webp') }}" alt="Slider 3">
            </a>
            <a href="{{ route('baby') }}" class="carousel-item">
                <img class="d-block w-100" src="{{ asset('web/img/slider/slider4.webp') }}" alt="Slider 4">
            </a>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="3"></button>
        </div>
    </div>

    <div class="campaign-area">
         <h1>
             250 TL VE ÜZERİ ALIŞVERİŞLERDE KARGO BEDAVA!
         </h1>
    </div>

    <div class="showcase">

        <div class="container showcase-container">

            <h3 class="w-100">Yeni Gelenler</h3>

            <div class="w-100 py-5"></div>

        </div>

    </div>

    <div class="showcase">

        <div class="container showcase-container">

            <h3 class="w-100">Çok Satanlar</h3>

            <div class="w-100 py-5"></div>

        </div>

    </div>

    <div class="brands">

        <div class="container brands-container">

            <h3 class="w-100">Markalarımız</h3>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-1.webp') }}" alt="Modest">
                <span>Modest</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-2.webp') }}" alt="Fall In Love">
                <span>Fall In Love</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-3.webp') }}" alt="COOOL">
                <span>COOOL</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-4.webp') }}" alt="Fit & Fit Women">
                <span>Fit & Fit Women</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-5.webp') }}" alt="Studio">
                <span>Studio</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-6.webp') }}" alt="Essential">
                <span>Essential</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-7.webp') }}" alt="Discovery">
                <span>Discovery</span>
            </div>

            <div class="brand">
                <img src="{{ asset('web/img/brands/brand-8.webp') }}" alt="Fit & Fit Men">
                <span>Fit & Fit Men</span>
            </div>

        </div>

    </div>

@endsection
