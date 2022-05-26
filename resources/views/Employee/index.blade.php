@extends('Employee.layout.main')
@section('content')
</head>

<body>


  <div class="page-content">
    <section class="no-padding-top no-padding-bottom mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:#eb930f" class="fa fa-download" aria-hidden="true"></i></div><strong>Current Projects </strong>
                </div>
                <div class="number dashtext-1" style="color:white !important">{{count(projects())}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="line-cahrt block">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection