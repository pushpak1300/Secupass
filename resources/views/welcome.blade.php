<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Secupass</title>
  <link href="{{ asset('assets') }}/favicon.svg" rel="icon" type="image/svg">

  <!-- Fonts -->
 <link href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Styles -->
  <style>
    html,
    body {
      background-color: #343a40;
      color: #f8f9fa;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 18px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .links:hover,
    a:hover {
      font-weight: bolder;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref full-height"> @if (Route::has('login')) <div class="top-right links"> @auth <a href="{{ url('/dashboard') }}" style="font-size:15px;">Dashboard</a> @else <a href="{{ route('login') }}" style="font-size:15px;color:#fff;">Login</a> @if (Route::has('register')) <a href="{{ route('register') }}" style="font-size:15px; color:#fff;" >Register</a> @endif @endauth </div> @endif <div class="content">
      <div class="title m-b-md">
        <i class="fas fa-shield-alt"></i> Secupass </div>
      <div>
        <h3> Password Manager Application</h3>
      </div>
      <div class="links">
        <a href="https://github.com/pushpak1300/Secupass" target="_blank">
          <i class="fab fa-github"></i>
          <b>GitHub</b>
        </a>
      </div>
    </div>
  </div>
</body>

</html>
