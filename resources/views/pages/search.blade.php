@extends('main')

@section('title', '| Result')

@section('content')

<div class="next_banner">
   <figure><img src="images/next-banner-3.jpg" alt="image" class="img-responsive center-block"></figure>  
   <div class="container">
      <div class="col-md-12">
          <ul>
              <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>
              <li><a href="{{ route('projects') }}">Projects</a></li><span>/</span>
              <li>Search</li>
          </ul>
      </div>
  </div>  
</div>

@if(count($searchResult))
<section class="projects-page">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="heading">
                   <h2>Resulted Projects</h2>
               </div>
           </div>
           @foreach($searchResult as $project)
           <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="proj-box">
                   <div class="proje-img">
                       <img src="images/{{ $project -> main_image }}" alt="image" class="img-responsivec center-block">

                       <div class="icon-proj">
                           <ul>
                               <a href="{{ route('view_project', [$project -> id]) }}"><li><i class="fa fa-search-plus" aria-hidden="true"></i></li></a>
                               <a href="{{ route('view_project', [$project -> id]) }}"><li><i class="fa fa-external-link" aria-hidden="true"></i></li></a>
                           </ul>
                       </div>

                   </div>

                   <div class="proje-detail">
                       <h2>{{ $project -> title }}</h2>
                       <p>OWNER: {{ $project -> owner }}</p>
                       <a href="{{ route('view_project', [$project -> id]) }}"><i class="fa fa-share" aria-hidden="true"></i> more detail</a>
                   </div>

               </div>
           </div>
           @endforeach
           {{ $searchResult -> render() }}
       </div>
   </div>
</section>

@else
<div class="text-center alert-danger" style="margin-bottom: 25px;">
  <h1>No Results Found</h1>
</div>


@endif


@endsection