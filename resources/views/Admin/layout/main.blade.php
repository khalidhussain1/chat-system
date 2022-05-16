<!DOCTYPE html>
<html>

@include('Admin.layout.head')

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
        <div class="navbar-header p-0">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <!-- <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">No Limit Logos</strong></div> -->
            <div class="brand-text brand-big visible text-uppercase"><img src="{{asset('logo.PNG')}}" style="width: 140px"></div>
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
        <li class=""><a href="{{route('admin.index')}}"> <i class="icon-home"></i>Dashboard</a></li>
        @if(Auth()->user()->role=='admin' || Auth()->user()->role=='Headmanager' )
        <li class=""><a href="{{route('admin.create-users')}}"> <i class="icon-home"></i>Create Accounts</a></li>
        <li class=""><a href="{{url('Admin/payroll')}}"> <i class="icon-home"></i>Payrolls</a></li>
        @endif
        @if(Auth()->user()->role=='admin' || Auth()->user()->role=='Headmanager' )
        <li class=""><a href="{{route('admin.updates')}}"> <i class="icon-home"></i>Updates </a></li>
        @endif 
        @if(Auth()->user()->role=='admin' )
        <li class=""><a href="{{url('Manager/chat-option')}}"> <i class="icon-home"></i>Chat Visibility</a></li>  
        <li class=""><a href="{{route('admin.requests')}}"> <i class="icon-home"></i>Payment Requests </a></li>
        @endif  
        <li class=""><a href="{{url('Admin/users')}}"> <i class="icon-home"></i>Users</a></li>
        @if(Auth()->user()->role=='Headmanager')
        <li class=""><a href="{{url('Manager/employes')}}"> <i class="icon-home"></i>Employes</a></li>
        @endif
        @if(Auth()->user()->role=='projectmanager')
    
        <li class=""><a href="{{url('Manager/post-project')}}"> <i class="icon-home"></i>Post Project</a></li>
        <li class=""><a href="{{url('Manager/project')}}"> <i class="icon-home"></i>Assign Projects</a></li>
        <li class=""><a href="{{route('manager.reports')}}"> <i class="icon-home"></i>Report/Updates</a></li>
        <li class=""><a href="{{url('Admin/payment-request')}}"> <i class="icon-home"></i>Payments </a></li>
        <li class=""><a href="{{url('Admin/status')}}"> <i class="icon-home"></i>Status </a></li>
        <li class=""><a href="{{url('Manager/chat-option')}}"> <i class="icon-home"></i>Chat Visibility</a></li>
        @endif
        <li class=""><a href="{{route('admin.profile-settings')}}"> <i class="icon-home"></i>Settings</a></li>
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