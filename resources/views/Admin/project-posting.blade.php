@extends('admin.layout.main')
@section('content')

<body>

    <div class="page-content">
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
        <form class="bg-dark m-5" action="{{route('manager.assignprojects')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <input type="hidden" value="{{auth()->user()->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="assign_by" placeholder="Title" name="title" required>
                    <div class="col-md-12">
                        <select class="custom-select mt-2 bg-dark " name="project_id">
                            <option selected>Select project here </option>
                            @foreach(projects() as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <select class="custom-select mt-2 bg-dark " name="client">
                            <option selected>Select Client Here </option>
                            @foreach(clients() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="custom-select mt-2 bg-dark " name="designer">
                            <option selected>Select Designer Here </option>
                            @foreach(designer() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="col-md-3 " style="max-width:100%">
                        <input type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deadline 01/01/2000" name="deadline" required>
                    </div> -->
                </div>
                <div class="row">

                    <div class="ml-3 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>


</body>
@endsection