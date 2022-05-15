<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>No Limit Logo</title>
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

<body>
  @section('head')
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><img src="{{asset('logo.PNG')}}" style="width: 140px"></div>
            <!-- <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">NO LIMIT Logos</strong></div> -->
            <div class="brand-text brand-sm"><strong class="text-primary">NLL</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">
          <div class="list-inline-item logout"> <a id="logout" href="{{url('logout')}}" class="nav-link">Logout <i class="icon-logout"></i></a></div>
        </div>
      </div>
    </nav>
  </header>
  @show
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @section('nav')
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
     
        <div class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8JyScJ3XAm0g9mNMQ1Ws7EI6LoVgs7_HDXg&usqp=CAU" alt="..." class="img-fluid rounded-circle"></div>
        
    
        <div class="title">
       

        </div>
      </div>
      <!-- Sidebar Navidation Menus-->
      <ul class="list-unstyled">
        <li class=""><a href="{{url('Employee/index')}}"> <i class="icon-home"></i>Dashboard</a></li>
        <li class=""><a href="{{route('employee.requestt')}}"> <i class="icon-home"></i>Payments</a></li>
        <li class=""><a href="{{route('employee.status')}}"> <i class="icon-home"></i>Status</a></li>
        <li class=""><a href=""> <i class="icon-home"></i>Withdraw</a></li>
        <li class=""><a href="{{route('employee.profile-settings')}}"> <i class="icon-home"></i>Settings</a></li>
      </ul>
   
    </nav>
    @show
    <!-- Sidebar Navigation end-->
    @yield('content')
  </div>
  <!-- JavaScript files-->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('dashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('dashboard/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('dashboard/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('dashboard/js/charts-custom.js')}}"></script>

<script src="{{asset('dashboard/js/charts-home.js')}}"></script>
<script src="{{asset('dashboard/js/front.js')}}"></script>


</html>