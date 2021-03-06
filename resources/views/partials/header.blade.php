<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Jobus</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{route('about')}}"><i class="fa fa-users"></i> About</a></li>
        <li><a href="{{route('applicaiton')}}"><i class="fab fa-wpforms"></i> Application</a></li>
        <li><a href="{{route('paymentDetails')}}"><i class="fa fa-credit-card"></i> Payment Details</a></li>
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('profile')}}">Profile</a></li>
            <li><a href="{{route('addnew')}}">Add Job</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>