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
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:#7878c1" class="fa fa-wallet"></i></div><strong>Sales  </strong>
                </div>
                <div class="number dashtext-1" style="color:white !important ">0</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
       
         
        </div>
      </div>
    </section>
    <section>
    <form class="bg-dark m-5" action="{{route('admin.chat-visibility')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <select class="custom-select mt-2 bg-dark " name="to">
                            <option selected>To </option>
                            @foreach(users() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select mt-2 bg-dark " name="from">
                            <option selected>From </option>
                            @foreach(users() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit" style="height: 90%;">Subnit</button>
                </div>
            </div>
    </form>
    </section>
    
   

    <!-- <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12">
            <div class="line-cahrt block">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    </div>
</body>
@endsection