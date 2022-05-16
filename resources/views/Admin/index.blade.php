@extends('Admin.layout.main')
@section('content')
</head>
<body>
  <div class="page-content">

 @include('Admin.includes.statistics')
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
      
         
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

   
    <!-- <footer class="footer">
      <div class="footer__block block no-margin-bottom">
       
      </div>
    </footer> -->
  </div>
  @endsection