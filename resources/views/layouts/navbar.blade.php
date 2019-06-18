<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <span class="navbar-brand " href="{{url('/')}}" style="font-size=25px;">
  <i class="fas fa-shield-alt"></i>
    Secupass
  </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('accounts') ? 'active' : '' }} ">
        <a class="nav-link" href="{{url('accounts')}}">
          <i class="fa fa-home"></i>
          Home
          {!! Request::is('accounts') ? '<span class="sr-only">(current)</span>' : '' !!}
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('accounts/create') ? 'active' : '' }} " href="{{url('accounts/create')}}">
          <i class="fa fa-plus">
          </i>
          Add
          {!! Request::is('accounts/create') ? '<span class="sr-only">(current)</span>' : '' !!}
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

