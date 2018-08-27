<div class="logo-nave">
 <nav class="navbar navbar-default" id="navebar">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

  </div>



  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=" {{ Request::route()->getName() == 'index' ? "selected": "" }} "><a href="{{ route('index') }}">home</a></li>
      <li class=" {{ Request::route()->getName() == 'about' ? "selected": "" }} "><a href="{{ route('about') }}">About Us</a></li>
      <li class="dropdown"><a href="{{ route('services') }}" class="dropdown-toggle" 
        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">our services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          @foreach($services as $service)
          <li><a href="{{ route('view_service',[$service -> id]) }}">{{ $service -> name }}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="dropdown"><a href="{{ route('projects') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">our Projects <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('completed_projects') }}">Completed Projects</a></li>
          <li><a href="{{ route('ongoing_projects') }}">Ongoing Projects</a></li>
        </ul>
      </li>
      <li class=" {{ Request::route()->getName() == 'gallery' ? "selected": "" }} "><a href="{{ route('gallery') }}">our gallery</a></li>
      <li class=" {{ Request::route()->getName() == 'careers' ? "selected": "" }} "><a href="{{ route('careers') }}">Careers</a></li>

      <li class=" {{ Request::route()->getName() == 'contact' ? "selected": "" }} "><a href="{{ route('contact') }}">Contact Us</a></li>
      <li><div class="dropdown" id="leftopdrop2">
       <button id="dLabel2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-search" aria-hidden="true"></i>
       </button>

       <ul class="dropdown-menu" aria-labelledby="dLabel2">

        <div class="searchcont">
          <form method="GET" name="Search" action="{{ route('search') }}">
            <input type="text" name="q" placeholder="Search Project Name or Title..">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input value="85350026" type="hidden" name="_sid"></form>
          </div>
        </ul>
      </div></li>
    </ul>
  </div>




  
</nav>
<div class="clearfix"></div>
</div>