@extends('web.layout.app')
@section('content')

    <div class="auth">

        <div class="container auth-container">

            @if($operation == "login")

            <form action="{{ route('login') }}" method="POST" autocomplete="off">

                @csrf

                <h3>GİRİŞ YAP</h3>

                <div class="form-group mb-4">
                    <label for="email">E-posta Adresi</label>
                    <input type="email" name="email" autocomplete="off" required="required">
                </div>

                <div class="form-group mb-4">
                    <label for="password">Şifre</label>
                    <input type="password" name="password" autocomplete="off" required="required">
                </div>

                <button type="submit">GİRİŞ YAP</button>

                <h5 class="mt-4 mb-3">Henüz kayıt olmadınız mı?</h5>

                <a href="{{ route('auth', 'register') }}">
                    KAYIT OL
                </a>

            </form>

            @else

            <form action="{{ route('register') }}" method="POST" autocomplete="off">

                @csrf

                <h3>KAYIT OL</h3>

                <div class="form-group mb-4">
                    <label for="name">Ad</label>
                    <input type="text" name="name" autocomplete="off" required="required">
                </div>

                <div class="form-group mb-4">
                    <label for="surname">Soyad</label>
                    <input type="text" name="surname" autocomplete="off" required="required">
                </div>

                <div class="form-group mb-4">
                    <label for="email">E-posta Adresi</label>
                    <input type="email" name="email" autocomplete="off" required="required">
                </div>

                <div class="form-group mb-4">
                    <label for="phone">Telefon Numarası</label>
                    <input type="tel" name="phone" autocomplete="off" required="required">
                </div>

                <div class="form-group mb-4">
                    <label for="password">Şifre</label>
                    <input type="password" name="password" autocomplete="off" required="required">
                </div>

                <button type="submit">KAYIT OL</button>

                <h5 class="mt-4 mb-3">Zaten kayıt oldunuz mu?</h5>

                <a href="{{ route('auth', 'login') }}">
                    GİRİŞ YAP
                </a>

            </form>

            @endif

            <img src="{{ asset('web/img/auth.jpg') }}" alt="Authentication">

        </div>

    </div>

@endsection
