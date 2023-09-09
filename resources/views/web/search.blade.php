@extends('web.layout.app')
@section('content')

    <div class="search">

        <div class="container search-container">

            <h4>ARAMA YAP</h4>

            <form action="{{ route('doSearch') }}" method="POST" autocomplete="off">

                @csrf

                <select name="search_category" autocomplete="off">
                    <option value="all" selected="selected">TÜMÜ</option>
                    <option value="women">KADIN</option>
                    <option value="men">ERKEK</option>
                    <option value="child">ÇOCUK</option>
                    <option value="baby">BEBEK</option>
                </select>

                <input type="text" name="search" placeholder="Arama yapmak istediğiniz kelimeyi girin." autocomplete="off" required="required">

                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass me-1"></i>
                    ARA
                </button>

            </form>

        </div>

    </div>

@endsection

