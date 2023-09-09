<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('web/img/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('web/img/favicon/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <title>{{ env('BRAND_NAME') }} - Online Alışverişin Yeni Adresi</title>
</head>
<body class="container-fluid">

<header>

    <nav class="container">

        <a class="logo" href="{{ route('index') }}">FRAXES</a>

        <ul class="menu category-menu">
            <li class="menu-element me-4" data-category="women">
                <a class="dropdown-toggle" type="button" id="menu-women" data-mdb-toggle="dropdown" aria-expanded="false">
                    KADIN
                </a>
                <div class="dropdown-menu fade-in" aria-labelledby="menu-women">
                    <div class="sub-menu container">
                        <ul>
                            <li class="menu-sub-title">Giyim</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çok Satanlar
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bluz
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Ceket
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Elbise
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Etek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Hırka
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kaban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kazak & Süveter
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tulum
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">İç Giyim ve Pijama</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bodysuit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gecelik
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Külot
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pijama
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sabahlık
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sütyen
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Takım Ürünler
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Plaj Giyim</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bikini
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mayo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Plaj Giyim
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Plaj Aksesuarları
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Takı
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Spor Giyim</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Dış Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Sütyeni
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Tişört
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Tayt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yoga Koleksiyonu
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Aksesuar</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Cüzdan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çanta
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çorap
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kemer
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kozmetik
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Parfüm
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şal
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şapka
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Takı
                                </a>
                            </li>
                        </ul>
                        <img src="{{ asset('web/img/women.webp') }}" alt="">
                    </div>
                </div>
            </li>
            <li class="menu-element me-4" data-category="men">
                <a class="dropdown-toggle" type="button" id="menu-men" data-mdb-toggle="dropdown" aria-expanded="false">
                    ERKEK
                </a>
                <div class="dropdown-menu fade-in" aria-labelledby="menu-men">
                    <div class="sub-menu container">
                        <ul>
                            <li class="menu-sub-title">Giyim</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çok Satanlar
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Ceket
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kazak & Süveter
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mont
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Ofis Stili
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort & Bermuda
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">İç Giyim & Pijama</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Boxer
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pijama
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Spor Giyim</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Spor Tişört
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Aksesuar</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Cüzdan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çanta
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çorap
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Kemer
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Parfüm
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şapka
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Takı
                                </a>
                            </li>
                        </ul>
                        <img src="{{ asset('web/img/men.webp') }}" alt="">
                    </div>
                </div>
            </li>
            <li class="menu-element me-4" data-category="child">
                <a class="dropdown-toggle" type="button" id="menu-child" data-mdb-toggle="dropdown" aria-expanded="false">
                    ÇOCUK
                </a>
                <div class="dropdown-menu fade-in" aria-labelledby="menu-child">
                    <div class="sub-menu container">
                        <ul>
                            <li class="menu-sub-title">Kız Çocuk</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çok Satanlar
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bluz
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Elbise & Tulum
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Etek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mont & Kaban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Erkek Çocuk</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çok Satanlar
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mont & Kaban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Aksesuar</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çanta
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çorap
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Saç Aksesuarları
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şapka
                                </a>
                            </li>
                        </ul>
                        <img src="{{ asset('web/img/children.webp') }}" alt="">
                    </div>
                </div>
            </li>
            <li class="menu-element" data-category="baby">
                <a class="dropdown-toggle" type="button" id="menu-baby" data-mdb-toggle="dropdown" aria-expanded="false">
                    BEBEK
                </a>
                <div class="dropdown-menu fade-in" aria-labelledby="menu-baby">
                    <div class="sub-menu container">
                        <ul>
                            <li class="menu-sub-title">Kız Bebek</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bere
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bluz
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çorap
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Elbise & Tulum
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Etek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tayt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yenidoğan
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="menu-sub-title">Erkek Bebek</li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tüm Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yeni Gelenler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Atlet
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Bere
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Çorap
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Eşofman Altı
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gömlek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Pantalon
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Sweatshirt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Şort
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tişört
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Yenidoğan
                                </a>
                            </li>
                        </ul>
                        <img src="{{ asset('web/img/baby.webp') }}" alt="">
                    </div>
                </div>
            </li>
        </ul>

        <ul class="menu operation-menu">
            <li class="me-4" data-operation="search">
                <a href="{{ route('search') }}">
                    <i class="fa-solid fa-magnifying-glass me-1"></i>
                    ARA
                </a>
            </li>
            <li class="menu-dropdown me-4" data-operation="language">
                <a class="dropdown-toggle language" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="flag" src="{{ asset('web/img/flags/tr.png') }}" alt="">
                    <span class="current-language">TÜRKÇE</span>
                </a>
                <ul class="dropdown-menu language-area py-0 fade-in">
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('web/img/flags/gb.png') }}" alt="">
                            <span>ENGLISH</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('web/img/flags/fr.png') }}" alt="">
                            <span>FRANÇAIS</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown me-4" data-operation="account">
                <a class="dropdown-toggle account" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user me-1"></i>
                    HESAP
                </a>
                <ul class="dropdown-menu account-area py-0 fade-in">
                    <li>
                        <a class="dropdown-item" href="{{ route('auth', 'login') }}">
                            GİRİŞ YAP
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('auth', 'register') }}">
                            KAYIT OL
                        </a>
                    </li>
                </ul>
            </li>
            <li data-operation="basket">
                <a class="basket-link" href="{{ route('basket') }}">
                    <i class="fa-solid fa-bag-shopping me-1"></i>
                    <span class="basket-counter">0</span>
                    SEPET
                </a>
            </li>
            <li class="ms-4" data-operation="mobile-menu">
                <a href="">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </li>
        </ul>

    </nav>

</header>

@yield('content')

<div class="advantages">
    <div class="container advantages-container">
        <div class="advantage">
            <img src="{{ asset('web/img/icons/shopping-bag.png') }}" alt="Kolay Alışveriş">
            <span>Kolay Alışveriş</span>
        </div>
        <div class="advantage">
            <img src="{{ asset('web/img/icons/fast-delivery.png') }}" alt="Hızlı Teslimat">
            <span>Hızlı Teslimat</span>
        </div>
        <div class="advantage">
            <img src="{{ asset('web/img/icons/good-quality.png') }}" alt="İyi Kalite">
            <span>İyi Kalite</span>
        </div>
        <div class="advantage">
            <img src="{{ asset('web/img/icons/discount.png') }}" alt="İndirimli Ürünler">
            <span>İndirimli Ürünler</span>
        </div>
        <div class="advantage">
            <img src="{{ asset('web/img/icons/campaigns.png') }}" alt="Avantajlı Kampanyalar">
            <span>Kampanyalar</span>
        </div>
        <div class="advantage">
            <img src="{{ asset('web/img/icons/headset.png') }}" alt="Çağrı Merkezi">
            <span>Çağrı Merkezi</span>
        </div>
    </div>
</div>

<footer>

    <nav class="container">

        <a class="logo" href="{{ route('index') }}">FRAXES</a>

        <div class="newsletter-container">

            <form class="newsletter" action="{{ route('newsletter') }}" method="POST" autocomplete="off">

                @csrf

                <h5>Kampanya ve yeniliklerden haberdar olmak için e-bültenimize kayıt olun.</h5>

                <div class="form-group">

                    <input type="email" name="newsletter" placeholder="E-posta adresinizi giriniz." required="required">

                    <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>

                </div>

                <div class="form-group mt-2">

                    <input type="checkbox" name="privacy_policy" id="privacy-policy" required="required">

                    <label for="privacy-policy">
                        Kişisel verilerimin işlenmesini <a href="{{ route('privacy-and-security') }}" target="_blank">Gizlilik & Güvenlik Metni</a>'nde açıklanan kurallar çerçevesinde kabul ediyorum.
                    </label>

                </div>

            </form>

        </div>

        <ul class="menu">
            <li>
                <ul>
                    <li class="footer-menu-title">KATEGORİLER</li>
                    <li>
                        <a href="{{ route('women') }}">KADIN</a>
                    </li>
                    <li>
                        <a href="{{ route('men') }}">ERKEK</a>
                    </li>
                    <li>
                        <a href="{{ route('child') }}">ÇOCUK</a>
                    </li>
                    <li>
                        <a href="{{ route('baby') }}">BEBEK</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="footer-menu-title">ALIŞVERİŞ</li>
                    <li>
                        <a href="#">KAMPANYALAR</a>
                    </li>
                    <li>
                        <a href="#">ÖDEME</a>
                    </li>
                    <li>
                        <a href="#">KARGO TAKİP</a>
                    </li>
                    <li>
                        <a href="#">SİPARİŞLERİM</a>
                    </li>
                    <li>
                        <a href="#">FAVORİ ÜRÜNLERİM</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="footer-menu-title">KURUMSAL</li>
                    <li>
                        <a href="{{ route('about') }}">HAKKIMIZDA</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">İLETİŞİM</a>
                    </li>
                    <li>
                        <a href="{{ route('career') }}">KARİYER</a>
                    </li>
                    <li>
                        <a href="{{ route('hr') }}">İNSAN KAYNAKLARI</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="footer-menu-title">BİLGİLER</li>
                    <li>
                        <a href="{{ route('membership') }}">ÜYELİK</a>
                    </li>
                    <li>
                        <a href="{{ route('order-and-delivery') }}">SİPARİŞ VE TESLİMAT</a>
                    </li>
                    <li>
                        <a href="{{ route('exchange-and-return-conditions') }}">DEĞİŞİM VE İADE KOŞULLARI</a>
                    </li>
                    <li>
                        <a href="{{ route('privacy-and-security') }}">GİZLİLİK VE GÜVENLİK</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="accordion" id="footer-menu">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#footer-category" aria-expanded="true" aria-controls="footer-category">
                        <span>KATEGORİLER</span>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </h2>
                <div id="footer-category" class="accordion-collapse collapse show" data-bs-parent="#footer-menu">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a href="#">KADIN</a>
                            </li>
                            <li>
                                <a href="#">ERKEK</a>
                            </li>
                            <li>
                                <a href="#">ÇOCUK</a>
                            </li>
                            <li>
                                <a href="#">BEBEK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#footer-shopping" aria-expanded="false" aria-controls="footer-shopping">
                        <span>ALIŞVERİŞ</span>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </h2>
                <div id="footer-shopping" class="accordion-collapse collapse" data-bs-parent="#footer-menu">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a href="#">KAMPANYALAR</a>
                            </li>
                            <li>
                                <a href="#">ÖDEME</a>
                            </li>
                            <li>
                                <a href="#">KARGO TAKİP</a>
                            </li>
                            <li>
                                <a href="#">SİPARİŞLERİM</a>
                            </li>
                            <li>
                                <a href="#">FAVORİ ÜRÜNLERİM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#footer-corporate" aria-expanded="false" aria-controls="footer-corporate">
                        <span>KURUMSAL</span>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </h2>
                <div id="footer-corporate" class="accordion-collapse collapse" data-bs-parent="#footer-menu">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a href="{{ route('about') }}">HAKKIMIZDA</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">İLETİŞİM</a>
                            </li>
                            <li>
                                <a href="{{ route('career') }}">KARİYER</a>
                            </li>
                            <li>
                                <a href="{{ route('hr') }}">İNSAN KAYNAKLARI</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#footer-information" aria-expanded="false" aria-controls="footer-information">
                        <span>BİLGİLER</span>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </h2>
                <div id="footer-information" class="accordion-collapse collapse" data-bs-parent="#footer-menu">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a href="{{ route('membership') }}">ÜYELİK</a>
                            </li>
                            <li>
                                <a href="{{ route('order-and-delivery') }}">SİPARİŞ VE TESLİMAT</a>
                            </li>
                            <li>
                                <a href="{{ route('exchange-and-return-conditions') }}">DEĞİŞİM VE İADE KOŞULLARI</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy-and-security') }}">GİZLİLİK VE GÜVENLİK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <ul class="socials">

            <li>
                <a class="me-3" href="https://facebook.com" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a class="me-3" href="https://twitter.com" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a class="me-3" href="https://instagram.com" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://youtube.com" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </li>

        </ul>

        <ul class="apps">
            <li class="me-4">
                <a href="#">
                    <img src="{{ asset('web/img/appstore.png') }}" alt="Apple App Store">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('web/img/googleplay.png') }}" alt="Google Play Store">
                </a>
            </li>
        </ul>

        <hr class="w-100">

        <span class="copyright">©2023 FRAXES - Tüm Hakları Saklıdır.</span>

        <span class="developer">Developed by <a href="https://github.com/mertbag96" target="_blank">Mert Bağ</a></span>

    </nav>

</footer>

<script src="{{ asset('web/plugins/jQuery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('web/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<script>

    $(".menu-element").on("mouseenter", function () {
        $(".search-area").removeClass("show");
        $(".language-area").removeClass("show");
        $(".account-area").removeClass("show");
    });

</script>

</body>
</html>
