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
                <h2>
                    Project Manager
                </h2>
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <form action="{{route('employee.request')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{Auth()->user()->id}}" name="employee_id">
                            <input type="hidden" value="0" name="status">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Amount </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="amount" required>

                                </div>

                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Position </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="position" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Shift </label>
                                    <select class="form-select form-control" aria-label="Default select example" name="shift" required>
                                        <option value="day">Day</option>
                                        <option value="night">Night</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="exampleInputPassword1">Method </label>
                                    <select class="form-select form-control" aria-label="Default select example" name="method" required>
                                        <option value="paypal">Paypal</option>
                                        <option value="upwork">Upwork</option>
                                        <option value="fiver">Fiver</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 ">
                                    <button type="submit" class="btn btn-primary " style="margin-top:30px">Submit</button>
                                </div>
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