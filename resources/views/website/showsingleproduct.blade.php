@extends('layout.master')
@section("content")

<!-- content -->
<section class="py-5 m-5">
    <div class="container m-5">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp" />
                    </a>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big1.webp" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big1.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big2.webp" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big2.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big3.webp" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big3.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big4.webp" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big4.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp" />
                    </a>
                </div>
                <!-- thumbs-wrap.// -->
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        {{$product->product_name}}
                    </h4>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-alt"></i>
                            <span class="ms-1">
                                4.5
                            </span>
                        </div>
                        <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{$product->available_quantity}}</span>
                        <span class="text-success ms-3">In stock</span>
                    </div>

                    <div class="mb-3">
                        <span class="h5">${{$product->product_price}}</span>
                        <span class="text-muted">/per piece</span>
                    </div>

                    <p>
                        {{$product->product_description}}
                    </p>

                    <div class="row mt-3">

                        <dt class="col-3">Color</dt>
                        <dd class="col-9">Brown</dd>

                        <dt class="col-3">Material</dt>
                        <dd class="col-9">Cotton, Jeans</dd>

                        <dt class="col-3">Brand</dt>
                        <dd class="col-9">Reebook</dd>
                    </div>

                    <hr />

                    <div class="row mb-4">
                        <div class="col-md-4 col-6">
                            <label class="mb-2">Size</label>
                            <select class="form-control border border-secondary p-2">
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                            </select>
                        </div>
                        <!-- col.// -->
                        <div class="col-md-4 col-6 mb-3">
                            <label class="mb-2 d-block">Quantity</label>
                            <div class="input-group mb-3" style="width: 170px;">
                                <button class="btn btn-white border border-secondary px-3 icon-hover" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                  <i class="fa-solid fa-minus icon-hover"></i>
                                </button>
                                <input type="text" class="form-control text-center border border-secondary" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                <button class="btn btn-white border border-secondary px-3 icon-hover" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus icon-hover"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <a href="{{route('add_to_cart')}}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-cart"></i> Add to cart </a>
                    <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
                </div>
            </main>
        </div>
    </div>
</section>


@endsection