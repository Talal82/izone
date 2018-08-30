<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user() -> name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> --}}
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CMS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::route()->getName() == ('info.index' || 'info.create' || 'info.edit')? "active":"" }}"><a href="{{ route('info.index') }}"><i class="fa fa-link"></i> <span>Info</span></a></li>
        <li class=""><a href="{{ route('office.index') }}"><i class="fa fa-link"></i> <span>Office</span></a></li>
        <li><a href="{{ route('banner.index') }}"><i class="fa fa-link"></i> <span>Banners</span></a></li>
        <li><a href="{{ route('value.index') }}"><i class="fa fa-link"></i> <span>Values</span></a></li>
        <li><a href="{{ route('benefit.index') }}"><i class="fa fa-link"></i> <span>Benefits</span></a></li>
        <li><a href="{{ route('about.index') }}"><i class="fa fa-link"></i> <span>About Us</span></a></li>
        <li><a href="{{ route('gallery.index') }}"><i class="fa fa-link"></i> <span>Gallery</span></a></li>
        <li><a href="{{ route('certificate.index') }}"><i class="fa fa-link"></i> <span>Certificates</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>