


@extends('Employee.layout.main')
@section('content')
<div class="page-content">  
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Employee Dashboard</h2>
        </div>
    </div>
    <!-- Breadcrumb-->

    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12 mt-5" >
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

                        <div class="table-responsive ">
                            @if(Auth()->user()->type=="Hourly")
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Hours</th>
                                        <th>Rate</th>
                                        <th>Payment</th>
                                        <th>Method</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            {{$item->employee->name}}
                                        </td>
                                        <td>
                                        {{$item->hours}}
                                        </td>
                                        <td>
                                        ${{$item->rate}}.00
                                        </td>
                                        <td>
                                        ${{$item->hours*$item->rate}}.00
                                        </td>   
                                        <td>
                                            {{$item->method}}
                                        </td>
                                        <td>
                                            @if($item->status==0)
                                            <button class="btn btn-primary">
                                                Pending 
                                            </button>
                                            @else
                                            <button class="btn btn-success">
                                                Aprroved 
                                            </button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                  
                                   
                                        <th>Payment</th>
                                        <th>Method</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            {{$item->employee->name}}
                                        </td>
                                     
                                    
                                      <td>
                                          ${{$item->amount}}.00
                                      </td>
                                        <td>
                                            {{$item->method}}
                                        </td>
                                        <td>
                                            @if($item->status==0)
                                            <button class="btn btn-primary">
                                                Pending 
                                            </button>
                                            @else
                                            <button class="btn btn-success">
                                                Aprroved 
                                            </button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection