@extends('app')

@section('title','Product List')
{{-- <h1>{{ trans('product.name') }}</h1>     --}}
@section('content')
@foreach ($products as $product)
<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
        <div class="product-img">
            <img src="{{ url('img/categori/product1.png') }}" alt="">
            <div class="new-product">
                <span>New</span>
            </div>
        </div>
        <div class="product-caption">
            <div class="product-ratting">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star low-star"></i>
                <i class="far fa-star low-star"></i>
            </div>
            <h4><a href="{{ route('products.show', $product->id ) }}">{{$product->name}}</a></h4>
            <div class="price">
                <ul>
                    <li>{{$product->price}}</li>
                    <li class="discount">$60.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
        <div class="product-img">
            <img src="{{ url('img/categori/product2.png') }}" alt="">
        </div>
        <div class="product-caption">
            <div class="product-ratting">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star low-star"></i>
                <i class="far fa-star low-star"></i>
            </div>
            <h4><a href="{{ route('products.show', $product->id ) }}">{{$product->name}}</a></h4>

            <div class="price">
                <ul>
                    <li>{{$product->price}}</li>
                    <li class="discount">$60.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
        <div class="product-img">
            <img src="{{ url('img/categori/product3.png') }}" alt="">
            <div class="new-product">
                <span>New</span>
            </div>
        </div>
        <div class="product-caption">
            <div class="product-ratting">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star low-star"></i>
                <i class="far fa-star low-star"></i>
            </div>
            <h4><a href="{{ route('products.show', $product->id ) }}">{{$product->name}}</a></h4>

            <div class="price">
                <ul>
                    <li>{{$product->price}}</li>
                    <li class="discount">$60.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection
