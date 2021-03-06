{{-- Customize Navbar --}}
<nav class="navbar has-shadow is-fixed-top" >
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
        <img src="{{asset('images/devmarketer-logo.png')}}" alt="EdFeed logo">
      </a>

      @if (Request::segment(1) == "manage/dashboard")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
        </a>
      @endif

      <div id="navbarBurger" class="navbar-burger burger" data-target="navMenuDocumentation">
        <span class="nav-toggle" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');"> </span>
        <span></span>
        <span></span>
      </div>
    </div>


    <div id="navMenuDocumentation" class="navbar-menu">
      <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Categories
          </a>

          <div class="navbar-dropdown">
            @foreach ($majors as $major)
              <a class="navbar-item" href="major/{{$major->id}}">
                {{$major->name}}
              </a>
            @endforeach
          </div>
        </div>

      </div> <!-- end of .navbar-start -->


      <div class="navbar-end nav-menu" style="overflow: visible">
        @guest
          <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
          <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Hey {{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                </span>Profile
              </a>

              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notifications
              </a>
              <a href="{{route('manage.dashboard')}}" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5"></i>
                </span>Manage
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <span class="icon">
                <i class="fa fa-fw fa-sign-out m-r-5"></i>
              </span>
              Logout
            </a>
            @include('_includes.forms.logout')
          </div>
        </div>
      @endguest
    </div>
  </div>

</div>
</nav>
