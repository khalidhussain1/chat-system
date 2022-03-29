@extends('admin.layout.main')
@section('content')
<div class="page-content">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('Admin/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Profile Settings</li>
        </ul>
    </div>
    {{-- <div class="page-header d-flex">

        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="profile" style="color: #db6574;"><a href="{{route('admin.profile-settings')}}" style="text-decoration: none";>Profile Settings</a></h2>
        </div>
        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="settings"><a href="{{route('admin.settings')}}" style="text-decoration: none";>Settings</a> </h2>
        </div>
    </div> --}}

    <section class="no-padding-top" >
        <div class="container-fluid">
        @if (session()->has('success'))

<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
            <div class="row">
                <!-- Horizontal Form-->
                <div class="col-lg-4" id="profile-settings">
                    <div class="block">
                        <div class="block-body">
                            <nav id="sidebar" style="border-right: 0px;width: auto;margin-left:-17px;">
                              <ul class="list-unstyled">
                                <li class="active"><a href="{{route('admin.profile-settings')}}"> <i class="fa fa-user"></i>Profile Settings</a></li>
                                <li class=""><a href="{{route('admin.settings')}}"> <i class="fa fa-unlock"></i>Change Password</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" id="profile-settings">
                    <div class="block">
                        <div class="title"><strong class="d-block">Update Information</strong></div>
                        <div class="block-body">
                            <form class="form-horizontal" method="post" action="{{route('admins.update_information')}}"  enctype='multipart/form-data'>
                                @csrf
                                <input id="inputHorizontalSuccess" type="hidden" value="{{Auth()->user()->id}}" placeholder="e.g John" class="form-control form-control-success" name="id">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">First Name</label>   
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text"  value="{{Auth()->user()->name}}" placeholder="e.g John" class="form-control form-control-success" name="name">
                                    </div>
                                </div>
                           
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="email" value="{{Auth()->user()->email}}"  placeholder="Email Address" class="form-control form-control-success" name="email">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" >Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="formFileDisabled" name="image" style="height: 47px;" />
                                    </div>
                                </div> -->
                              
                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             

            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#profile").click(function() {
            $('#profile').css('color', '#db6574');
            $('#settings').css('color', '');
        });
        $("#settings").click(function() {
            $('#settings').css('color', '#db6574');
            $('#profile').css('color', '');

        });

    });
</script>
@endsection