@extends('Client.layout.main')
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
                  <div class="icon"><i style="color:#eb930f" class="fa fa-download" aria-hidden="true"></i></div><strong>Client </strong>
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
                  <div class="icon"><i style="color:green" class="fa fa-database"></i></div><strong>Profit</strong>
                </div>
                <div style="color:white !important  " class="number dashtext-2">375</div>
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
                  <div class="icon"><i style="color:#ef4e65" class="fa fa-gift"></i></div><strong>Bonsues</strong>
                </div>
                <div class="number dashtext-3" style="color:white !important">140</div>
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
                  <div class="icon"><i style="color:blue" class="fa fa-users"></i></div><strong>ref. Comissions</strong>
                </div>
                <div class="number dashtext-4" style="color: white !important;">41</div>
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
                  <div class="icon"><i style="color:#7878c1" class="fa fa-wallet"></i></div><strong>Balance </strong>
                </div>
                <div class="number dashtext-1" style="color:white !important ">27</div>
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
                  <div class="icon"><i class="fa fa-envelope" style="color: #e95f71;"></i></div><strong style="font-size: 13px;">Total Packages</strong>
                </div>
                <div class="number dashtext-2" style="color:white !important">375</div>
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
                  <div class="icon"><i class="fa fa-envelope-open" style="color:blue"></i></div><strong style="font-size: 13px;">Active Packages </strong>
                </div>
                <div class="number dashtext-3" style="color:white !important">140</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
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