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
                                    <th> name </th>
                                    <th> email </th>
                                    <th> Status </th>
                                    <th> password </th>
                                    <th> Date </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $u )



                                <tr>
                                    <td>
                                        <img src="{{asset('admin/images/faces/face1.jpg')}}" class="me-2" alt="image"> {{$u->name}}
                                    </td>
                                    <td> {{$u->email}}</td>
                                    <td>
                                        <label class="badge badge-gradient-success">Active</label>
                                    </td>
                                    <td> {{$u->password}} </td>
                                    <td> {{$u->created_at}} </td>
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