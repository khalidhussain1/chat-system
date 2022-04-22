@extends('Designer.layout.main')
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
                  <div class="icon"><i style="color:blue" class="fa fa-users"></i></div><strong>Projects</strong>
                </div>
                <div class="number dashtext-4" style="color: white !important;">{{designer_projects(Auth()->user()->id)}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
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
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="line-chart block chart">
              <div class="title"><strong>BTCUSD </strong></div>
              <canvas id="lineChartCustom1"></canvas>
            </div>
          </div>
      
          <div class="col-lg-4">
            <div class="chart block" style="height:230px!important">
              <div class="title"> <strong>ETHUSD</strong></div>
              <div class="bar-chart chart margin-bottom-sm">
                <canvas id="barChartCustom1" style="height: 108px!important;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="chart block">
              <div class="title"> <strong>LTCUSD</strong></div>
              <div class="bar-chart chart">
                <canvas id="barChartCustom2"></canvas>
              </div>
            </div>
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