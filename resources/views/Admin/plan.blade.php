<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('dashboard/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('dashboard/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('dashboard/css/custom.css')}}">
    <!-- Charts css -->
    <link rel="stylesheet" href="{{asset('dashboard/css/chartcss.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('dashboard/img/favicon.ico')}}">
    <!-- cahrt js -->
    <link rel="shortcut icon" href="{{asset('dashboard/js/chart1.js')}}">
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">





</head>


<div class="page-content " style="width: 100% !important;">

    <section class="no-padding-top no-padding-bottom">
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

        <div class="alert alert-success ">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="container-fluid d-flex justify-content-center">
            <div style="width: 50%;" class="mt-5" style="margin-top: 400px !important;">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="statistic-block block" style="height:260px">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:#7878c1" class="fa fa-wallet"></i></div><strong>Logo Design </strong>
                                </div>
                                <div class="number dashtext-1" style="color:white !important ">$300.00 </div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                            </div>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, magni. Autem repudiandae dolor nisi ullam consequuntur aspernatur debitis pariatur.
                                </p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">
                                <a href="{{route('projects')}}" style="color: white;text-decoration:none;">
                             Get A Quote
                             </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="statistic-block block" style="height:260px">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i style="color:#7878c1" class="fa fa-wallet"></i></div><strong>Illustration Design </strong>
                                </div>
                                <div class="number dashtext-1" style="color:white !important ">$400.00</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                            </div>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, magni. Autem repudiandae dolor nisi ullam consequuntur aspernatur debitis pariatur.
                                </p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">
                                <a href="{{route('projects')}}" style="color: white;text-decoration:none;">
                             Get A Quote
                             </a>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
</div>