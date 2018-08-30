<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IZ</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IZone</b> Mechanics</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              {{-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span>{{ Auth::user() -> name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
                <p>Email: <u>{{ Auth::user() -> email }}</u></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                   @csrf
                   <button type="submit" class="btn btn-default btn-flat">Sign Out</button>
                 </form>
                 {{-- <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a> --}}
               </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>