@extends('admin.layout.master')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body col-12">
                    <h4 class="card-title text-center p-3">Users Information</h4>
                    <div class="table-responsive ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Password </th>
                                    <th> Created_at </th>
                                    <th> Status </th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $u )



                                <tr>
                                    <td>
                                        <img src="{{asset('admin/images/faces/face1.jpg')}}" class="me-2" alt="image"> {{$u->name}}
                                    </td>
                                    <td> {{$u->email}}</td>
                                    <td> {{$u->password}} </td>
                                    <td> {{$u->created_at}} </td>



                                    <td>
                                        @if ($u->status == 'Active')
                                        <label class="badge badge-gradient-success">Active</label>
                                        @else
                                        <label class="badge badge-gradient-danger">Inactive</label>

                                        @endif
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark" data-toggle="modal" data-target="#exampleModal{{$u->id}}"><i class="fas fa-eye align-center text-center"></i></a>

                                        <!-- Unique modal ID with product ID appended -->
                                        <div class="modal fade" id="exampleModal{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$u->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="max-width: 42rem;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{$u->id}}"> View</h5>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="max-height: 400px ;">

                                                            <div class="row mb-3 ">

                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Image</p>
                                                                            <div style="width: 20px; height:18px;">
                                                                                <img src="{{$u->profile_image}}" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Name</p>
                                                                            <span>{{$u->name}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">

                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-4" style="color: #111827; font-weight:600;">Email</p>
                                                                            <span>{{$u->email}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-3" style="color: #111827; font-weight:600;">Role</p>
                                                                            <span>{{$u->role}}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <div style="border: 1px solid #cccc; border-radius: 10px; padding: 10px; background-color:#F9FAFB">
                                                                            <p class="fw-4" style="color: #111827; font-weight:600;">Status</p>
                                                                            <span>{{$u->status}}</span>
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
                                        <a href="#" class="text-dark" data-toggle="modal" data-target="#exampleModall{{$u->id}}"><i class="far fa-edit align-center text-center "></i></a>

                                        <!-- Unique modal ID with product ID appended -->
                                        <div class="modal fade" id="exampleModall{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabell{{$u->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="max-width: 42rem; ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabell{{$u->id}}">Edit</h5>

                                                    </div>


                                                    <form action="{{route('edit_users',['id' => $u->id])}}" method="post">
                                                        @csrf
                                                        <div class="modal-body overflow-auto">
                                                            <div style="max-height: 400px ;">

                                                                <div class="row mb-3 ">

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;"> Name</p>
                                                                        <input type="text" class="form-control" value="{{$u->name}}" name="name">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Email</p>
                                                                        <input type="text" class="form-control" value="{{$u->email}}" name="email">
                                                                    </div>
                                                                </div>


                                                                <div class="row mb-3 ">

                                                                    <div class="col-md-6">
                                                                        <p class="fw-3" style="color: #111827; font-weight:600;">Status</p>
                                                                        <input type="text" class="form-control" value="{{$u->status}}" name="status">
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

                                        <form action="{{route('delete_user', ['id' => $u->id])}}" method="post">
                                            @csrf
                                            <button type="submit" class="text-dark border-radius-none"><i class="far fa-trash-alt align-center text-center "></i></button>
                                        </form>
                                    </td>
                                
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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