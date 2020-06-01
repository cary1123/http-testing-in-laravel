@extends('layouts.master')

@section('page-title', '購物車')

@section('page-style')
<link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
@endsection

@section('page-script')
@endsection

@section('page-content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('svg/bootstrap-solid.svg') }}" alt="" width="72" height="72">
            <h2>購物車</h2>
            <p class="lead">請選擇您想要購買的商品數量</p>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-12 mb-12">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">待購清單</span>
                </h4>
                <form action="{{ route('checkout.index') }}" method="post" accept-charset="UTF-8">

                    @csrf

                    <ul class="list-group mb-3">
                        @foreach($products as $index => $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="col-9">
                                <h6 class="my-0">{{ $product->name }}</h6>
                                <small class="text-muted">{{ $product->description }}</small>
                                <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product->id }}">
                            </div>
                            <div class="col-2">
                                <select name="products[{{ $index }}][quantity]" class="form-control form-control-sm">
                                    @foreach(range(1, 10) as $quantity)
                                    <option>{{ $quantity }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <span class="text-muted">$ {{ $product->price }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="text-right">
                        <button type="submit" class="btn btn-secondary">結帳</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; {{ date('Y') }} <a href="https://www.laravel-dojo.com/" target="_blank">Laravel 道場</a> 測試入門實戰</p>
        </footer>
    </div>
@endsection
