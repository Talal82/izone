
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
        <li class="{{ MenuHelper::areActiveRoutes(['service.index', 'service.create', 'service.show','service.edit']) }}"><a href="{{ route('service.index') }}"><i class="fa fa-link"></i> <span>Services</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['project.index', 'project.create', 'project.show','project.edit']) }}"><a href="{{ route('project.index') }}"><i class="fa fa-link"></i> <span>Projects</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['about.index', 'about.create', 'about.show','about.edit']) }}"><a href="{{ route('about.index') }}"><i class="fa fa-link"></i> <span>About Us</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['info.index', 'info.create', 'info.show','info.edit']) }}"><a href="{{ route('info.index') }}"><i class="fa fa-link"></i> <span>Info</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['office.index', 'office.create', 'office.show','office.edit']) }}"><a href="{{ route('office.index') }}"><i class="fa fa-link"></i> <span>Office</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['banner.index', 'banner.create', 'banner.show','banner.edit']) }}"><a href="{{ route('banner.index') }}"><i class="fa fa-link"></i> <span>Banners</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['value.index', 'value.create', 'value.show','value.edit']) }}"><a href="{{ route('value.index') }}"><i class="fa fa-link"></i> <span>Values</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['benefit.index', 'benefit.create', 'benefit.show','benefit.edit']) }}"><a href="{{ route('benefit.index') }}"><i class="fa fa-link"></i> <span>Benefits</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['gallery.index', 'gallery.create', 'gallery.show','gallery.edit']) }}"><a href="{{ route('gallery.index') }}"><i class="fa fa-link"></i> <span>Gallery</span></a></li>

        <li class="{{ MenuHelper::areActiveRoutes(['certificate.index', 'certificate.create', 'certificate.show','certificate.edit']) }}"><a href="{{ route('certificate.index') }}"><i class="fa fa-link"></i> <span>Certificates</span></a></li>

        
        



        {{-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>