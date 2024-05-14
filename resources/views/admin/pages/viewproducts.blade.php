@extends('admin.layout.master')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body col-12">
                    <h4 class="card-title text-center p-3">All Products</h4>
                    <div class="table-responsive ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> PRODUCT NAME </th>
                                    <th> PRODUCT DESCRIPTION </th>
                                    <th> PRODUCT CATEGORY </th>
                                    <th> AVAILABLE QUANTITY </th>
                                    <th> PRODUCT PRICE </th>
                                    <th> STATUS </th>
                                    <!-- <th> MAIN IMAGE </th> -->
                                    <th>VIEW</th>
                                    <th>EDIT </th>
                                    <th>DELETE </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($product as $p )

                                



                                <tr>
                                    <td> {{$p->product_name}}</td>
                                    <td class="text-wrap" style="width: 15rem;"> {{$p->product_description}}</td>
                                    <td> {{$p->product_category}} </td>
                                    <td> {{$p->available_quantity}} </td>
                                    <td> {{$p->product_price}} </td>

                                    <!-- <td>
                                        <img src="{{asset('storage/'.$p->main_image)}}" width="50px" class="me-0" alt="image">
                                    </td> -->
                                    <td>
                                        @if ($p->status == 'Active')
                                        <label class="badge badge-gradient-success">Active</label>
                                        @else
                                        <label class="badge badge-gradient-danger">Inactive</label>

                                        @endif
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark" data-toggle="modal" data-target="#exampleModal{{$p->id}}"><i class="fas fa-eye align-center text-center"></i></a>

                                        <!-- Unique modal ID with product ID appended -->
                                        <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$p->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="max-width: 42rem;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{$p->id}}"> View</h5>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="max-height: 400px ;">

                                                            <div class="row mb-3 ">

                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Product Image</p>
                                                                            <div style="width: 20px; height:18px;">
                                                                                <img src="{{$p->main_image}}" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Product Name</p>
                                                                            <span>{{$p->product_name}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">

                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-4" style="color: #111827; font-weight:600;">Quantity</p>
                                                                            <span>{{$p->available_quantity}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Price</p>
                                                                            <span>{{$p->product_price}}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Category</p>
                                                                            <span>{{$p->product_category}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-4" style="color: #111827; font-weight:600;">Status</p>
                                                                            <span>{{$p->status}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Add more product details as needed -->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <!-- You can add additional buttons here -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark" data-toggle="modal" data-target="#exampleModall{{$p->id}}"><i class="far fa-edit align-center text-center "></i></a>

                                        <!-- Unique modal ID with product ID appended -->
                                        <div class="modal fade" id="exampleModall{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabell{{$p->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="max-width: 42rem; ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabell{{$p->id}}">Edit</h5>

                                                    </div>


                                                    <form action="{{route('edit_products',['id' => $p->id])}}" method="post">
                                                        @csrf
                                                        <div class="modal-body overflow-auto">
                                                            <div style="max-height: 400px ;">

                                                                <div class="row mb-3 ">

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Product Name</p>
                                                                        <input type="text" class="form-control" value="{{$p->product_name}}" name="product_name">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Product Category</p>
                                                                        <input type="text" class="form-control" value="{{$p->product_category}}" name="product_category">
                                                                    </div>
                                                                </div>


                                                                <div class="row mb-3 ">

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Quantity</p>
                                                                        <input type="text" class="form-control" value="{{$p->available_quantity}}" name="available_quantity">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Price</p>
                                                                        <input type="text" class="form-control" value="{{$p->product_price}}" name="product_price">
                                                                    </div>
                                                                </div>


                                                                <div class="row mb-3 ">

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Status</p>
                                                                        <input type="select" class="form-control" value="{{$p->status}}" name="status">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Description</p>
                                                                        <input type="text" class="form-control h-100 overflow-auto" value="{{$p->product_description}}" name="product_description">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                                <!-- You can add additional buttons here -->
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>


                                    </td>

                                    <td>

                                    <form action="{{route('delete_product', ['id' => $p])}}" method="post">
                                        @csrf
                                        <button type="submit" class="text-dark border-radius-none"><i class="far fa-trash-alt align-center text-center "></i></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection