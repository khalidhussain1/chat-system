@extends('Employee.layout.main')
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
            @if(Auth()->user()->type=="Hourly")
            <div class="container p-5">
            <h2>
                        Hourly Employe 
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
                                    <label for="exampleInputEmail1">Hours </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="hours" required>

                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="exampleInputPassword1">Rate </label>
                                    <select class="form-select form-control" aria-label="Default select example" name="rate" required>
                                        <option value="1">$1.00</option>
                                        <option value="1.5">$1.50</option>
                                        <option value="2">$2.00</option>
                                        <option value="2.5">$2.50</option>
                                        <option value="3">$3.00</option>
                                        <option value="3.5">$3.50</option>
                                        <option value="4">$4.0</option>
                                        <option value="4.5">$4.50</option>
                                        <option value="5">$5.0</option>
                                        <option value="5.5">$5.50</option>
                                        <option value="6">$6.0</option>
                                     
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
            @else

            <div class="container p-5">
            <h2>
                        Salaried  Employe 
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
            @endif
        </section>

        <!-- <footer class="footer">
      <div class="footer__block block no-margin-bottom">
       
      </div>
    </footer> -->
    </div>
    @endsection