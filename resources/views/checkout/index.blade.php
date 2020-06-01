@extends('layouts.master')

@section('page-title', '結帳')

@section('page-style')
<link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
@endsection

@section('page-script')
@endsection

@section('page-content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('svg/bootstrap-solid.svg') }}" alt="" width="72" height="72">
            <h2>結帳</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-12 mb-12">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">您總共買了 {{ $totalCount }} 件商品</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>帳單總金額：</span>
                        <strong>$ {{ $totalAmount }}</strong>
                    </li>
                </ul>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; {{ date('Y') }} <a href="https://www.laravel-dojo.com/" target="_blank">Laravel 道場</a> 測試入門實戰</p>
        </footer>
    </div>
@endsection
