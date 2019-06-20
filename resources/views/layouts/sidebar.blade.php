<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="">
      <span style=" font-family: 'Nunito', sans-serif;color:; #f8f9fa;font-size=25px;">
        <i class="fas fa-shield-alt"></i> Secupass </span>
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <i class="fas fa-user-circle"></i>
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a href="{{url('User')}}" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>My profile</span>
          </a>
          <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>Report Bug</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
          </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <span class="text-center" style=" font-family: 'Nunito', sans-serif;font-size=35px; font-weight:bolder;">
              <i class="fas fa-shield-alt"></i> Secupass </span>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none"method="POST" action="/search">
        @csrf
        <div class="input-group input-group-rounded input-group-merge">
          
          <input type="sumbit" class="form-control form-control-rounded form-control-prepended" name="search" placeholder="Search" style="position: absolute; left: -9999px" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'text-primary' : '' }}" href="{{url('dashboard')}}">
            <i class="ni ni-tv-2 {{ Request::is('dashboard') ? 'text-primary' : '' }}"></i> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('accounts/create') ? 'text-primary' : '' }}" href="{{url('accounts/create')}}">
            <i class="fa fa-plus {{ Request::is('accounts/create') ? 'text-primary' : '' }}"></i> Add Account </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('accounts') ? 'text-primary' : '' }}" href="{{url('accounts')}}">
            <i class="ni ni-bullet-list-67 {{ Request::is('accounts') ? 'text-primary' : '' }}"></i> Accounts </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('User') ? 'text-primary' : '' }}" href="{{url('User')}}">
            <i class="ni ni-single-02 {{ Request::is('User') ? 'text-primary' : '' }}"></"></i> User profile </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Main content -->
<div class="main-content">
  <!-- Top navbar -->
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <!-- Form -->
      <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search" type="text">
          </div>
        </div>
      </form>
      <!-- User -->
      <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <i class="fas fa-user-circle"></i>
              </span>
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{$user->username}}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{url('User')}}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="{{__('https://github.com/pushpak1300/Secupass/issues')}}" target=" _blank" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Report Bug</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>