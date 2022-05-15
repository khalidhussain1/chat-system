@extends('admin.layout.main')
@section('content')
</head>

<body>
    <div class="page-content">

        <section class="no-padding-top no-padding-bottom mt-3">
            @if (session()->has('success'))
            <div class="col-lg-12" id="profile-settings">
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            </div>
            @endif
            @if (session()->has('error'))
            <div class="col-lg-12" id="profile-settings">
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            </div>
            @endif
            @if ($errors->any())
            <div class="col-lg-12" id="profile-settings">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <form action="{{route('create')}}" method="post">
                            @csrf
                            <input type="hidden" value="employe" name="role">

                            <div class="row">
                                <div class="form-group col-md-6 ">
                                    <label for="exampleInputEmail1">First Name </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="firstname" required>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lastname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 ">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
             
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="exampleInputPassword1">Type</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="type" required>
                                        <option value="Hourly">Hourly</option>
                                        <option value="Salaried">Salaried</option>
                                     
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- <footer class="footer">
      <div class="footer__block block no-margin-bottom">
       
      </div>
    </footer> -->
    </div>
    @endsection