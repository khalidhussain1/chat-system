<!DOCTYPE html>
<html>

@include('admin.layout.head');

<body>
  @section('head')
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">
            Close
            <i class="fa fa-close">
            </i>
          </div>
          <form action="#" id="searchForm">
            <div class="form-group">
              <input name="search" placeholder="What are you searching for..." type="search">
              <button class="submit" type="submit">
                Search
              </button>
              </input>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header-->
          <a class="navbar-brand" href="index.html">
            <div class="brand-text brand-big visible text-uppercase">
              <strong class="text-primary">
               Logo
              </strong>

            </div>
            <div class="brand-text brand-sm">
              <strong class="text-primary">
                L
              </strong>

            </div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle">
            <i class="fa fa-long-arrow-left">
            </i>
          </button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">


         
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
        <li class=""><a href="{{route('admin.create-users')}}"> <i class="icon-home"></i>Create Accounts</a></li>
        <li class=""><a href=""> <i class="icon-home"></i>Payrolls</a></li>
        <li class=""><a href="{{url('Admin/users')}}"> <i class="icon-home"></i>Users</a></li>
        <li class=""><a href=""> <i class="icon-home"></i>Chats</a></li>
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