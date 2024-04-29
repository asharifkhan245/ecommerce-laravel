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
                                        <label class="badge badge-gradient-success">{{$p->status}}</label>
                                    </td>

                                    <td>
                                        <a href="" class="text-dark"><i class="fas fa-eye align-center text-center "></i></a>
                                    </td>
                                  

                                    <td>
                                        <a href="" class="text-dark"><i class="far fa-edit align-center text-center "></i></a>
                                    </td>

                                    <td>
                                        <a href="" class="text-dark"><i class="far fa-trash-alt align-center text-center "></i></a>
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