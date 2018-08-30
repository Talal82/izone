<ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        @if(Request::route() -> getName() == ('info.index' || 'info.create' || 'info.edit'))
        <li class="active">Info</li>
        @endif
      </ol>