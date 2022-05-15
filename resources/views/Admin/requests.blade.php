@extends('admin.layout.main')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Admin Dashboard</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
 


    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href=""> Payment Requests</a></li>

        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session()->has('success'))

                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Name</th>
                                      
                                        <th>Amount</th>
                                        <th>Role</th>
                                        <th>Method </th>
                                        <th>Position</th>
                                        <th>Shift </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($data as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->employee->name}}</td>
                                 
                                        <td>{{$item->amount}}.00$</td>
                                        <td>{{$item->employee->role}}</td>
                                        <td>{{$item->method}}</td>
                                        <td>{{$item->position}}</td>
                                        <td>{{$item->shift}}</td>
                                        <td><button class="btn btn-primary">
                                             <a  style="color:white"; href="{{url('Admin/statuschnage/'.$item->id)}}" >   Approve</a>
                                            </button></td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection