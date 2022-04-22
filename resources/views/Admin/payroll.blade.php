@extends('admin.layout.main')
@section('content')

<body>

    <div class="page-content">

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
        <section class="no-padding-top no-padding-bottom mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:#eb930f" class="fa fa-download" aria-hidden="true"></i></div><strong>Visitors</strong>
                                </div>
                                <div class="number dashtext-1" style="color:white !important">27</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:green" class="fa fa-database"></i></div><strong>New Accounts</strong>
                                </div>
                                <div style="color:white !important  " class="number dashtext-2">{{new_accounts()}}</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:#ef4e65" class="fa fa-gift"></i></div><strong>Total Projects</strong>
                                </div>
                                <div class="number dashtext-3" style="color:white !important">0</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:blue" class="fa fa-users"></i></div><strong>Current Projects</strong>
                                </div>
                                <div class="number dashtext-4" style="color: white !important;">0</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2>
                Payroll Detail
                <p style="    font-size: 10px;
    margin-left: 3px;
    margin-top: 6px;">
                   
                </p>
            </h2>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name </th>
                        <th scope="col">Designer</th>
                        <th scope="col">Payout </th>
                        <th scope="col">Payment Method </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->project->title}}</td>
                        <td>{{$item->designer->name}}</td>
                        <td>{{$item->project->budget}}</td>
                        <td>{{$item->project->intrested}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- <div class="container mt-5">
            <h2>
                Payroll Detail
                <p style="    font-size: 10px;
    margin-left: 3px;
    margin-top: 6px;">
                   Direct Clients 
                </p>
            </h2>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name </th>
                        <th scope="col">Designer</th>
                        <th scope="col">Payout </th>
                        <th scope="col">Payment Method </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$item->project->title}}</td>
                        <td>{{$item->designer->name}}</td>
                        <td>{{$item->project->budget}}</td>
                        <td>{{$item->project->intrested}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div> -->



</body>
@endsection