@extends('frontend.master')
@section('content')

    @include('frontend.Home.layout.carousel')
    @include('frontend.Home.Brand-hot.index')



    @include('frontend.Home.category-product.index')


    @include('frontend.Home.product-best.index')

    @include('frontend.Home.product-all.index')

   
@endsection
