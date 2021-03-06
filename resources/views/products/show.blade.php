@extends('app')

@section('title', 'Single nhe')

@section('content')


<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
        <div class="product-img">
            <img src="img/categori/product1.png" alt="">
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
            <h4>{{$product->name}}</h4>
            <div class="price">
                <ul>
                    <li>{{$product->price}}</li>
                    <li class="discount">$60.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
