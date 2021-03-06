<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index-2.html"><span>{{ config('app.name', 'Laravel') }}</span> Gallery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="/gallery">Gallery</a></li>
        @if (Auth::guard('admin')->user())
        <li><a href="{{ route('matches.index') }}">{{ Auth::guard('admin')->user()->name }}</a></li>
        <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Sign Out</a>


          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>

        </li>
        @endif
      </ul>
    </div>
    <!-- /.navbar-collapse -->
    <ul class="nav navbar-nav navbar-right nav-search visible-xs">
      <li class="fsearch">
        <a class="btn-search"></a>
      </li>
    </ul>
  </div>
  <!-- /.container-fluid -->
</nav>
<!-- end:navbar -->