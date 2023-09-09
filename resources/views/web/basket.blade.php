@extends('web.layout.app')
@section('content')

    <div class="basket">

        <div class="container empty-basket-container">

            <h3>Sepetinizde Ürün Yok!</h3>

            <i class="fa-solid fa-bag-shopping my-4"></i>

            <a class="default-button mt-4" href="{{ route('index') }}">
                ALIŞVERİŞE BAŞLA
            </a>

        </div>

    </div>

@endsection
