@extends('layouts.master')

@section('page-title', '首頁')

@section('page-style')
<link href="{{ asset('css/cover.css') }}" rel="stylesheet">
@endsection

@section('page-script')
@endsection

@section('page-content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">購物平台</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="{{ route('home.index') }}">首頁</a>
                <a class="nav-link" href="{{ route('cart.index') }}">購物車</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover text-center">
        <h1 class="cover-heading">你要的這裡都有！</h1>
        <p class="lead">這裡什麼都賣，什麼都不奇怪。你的腦叫你一直買！</p>
        <p class="lead">
            <a href="{{ route('cart.index') }}" class="btn btn-lg btn-secondary">開始消費</a>
        </p>
    </main>

    <footer class="mastfoot mt-auto text-center">
        <div class="inner">
            <p>&copy; {{ date('Y') }} <a href="https://www.laravel-dojo.com/" target="_blank">Laravel 道場</a> 測試入門實戰</p>
        </div>
    </footer>
</div>
@endsection
