@extends('layout.master')


@section("content")
<section class="section mt-5" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h4>Women</h4>
                    <span>Best Clothes For Women</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-5">
            @if ($womens_products->count() > 0)

            @foreach($womens_products as $w)

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="item ">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{asset('images/baner-right-image-01.jpg')}}">

                    </div>
                    <div class="down-content">
                        <h4>{{ $w->product_name }}</h4>
                        <span>${{$w->product_price}}</span>

                    </div>

                    <ul class="stars d-flex">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
            @endforeach

            @else

            <h3 class="text-center">No products found</h3>
            @endif
        </div>
    </div>
</section>
@endsection