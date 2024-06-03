@extends("layout.master")

@section("content")
<section class="section mt-5" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-5">
            @foreach($mens_products as $m)
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
                        <img src="{{asset('images/women-02.jpg')}}">

                    </div>
                    <div class="down-content">
                        <h4>{{ $m->product_name }}</h4>
                        <span>${{$m->product_price}}</span>

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
        </div>
    </div>
</section>
@endsection