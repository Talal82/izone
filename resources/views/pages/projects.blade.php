@extends('main')

@section('title', '| Projects')

@section('content') 
<!--banner section -->
<div class="next_banner">
 <figure><img src="images/next-banner-3.jpg" alt="image" class="img-responsive center-block"></figure>  
 <div class="container">
  <div class="col-md-12">
    <ul>
      <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>

      @if(Request::route() ->getName() == 'completed_projects')
      <li><a href="{{ route('projects') }}">Projects</a></li><span>/</span>
      <li>Completed Projects</li>

      @elseif(Request::route() -> getName() == 'ongoing_projects')
      <li><a href="{{ route('projects') }}">Projects</a></li><span>/</span>
      <li>Ongoing Projects</li>
      
      @else
      <li>Projects</li>
      @endif
    </ul>
  </div>
</div>  
</div>  
<!--banner section --> 

<!--center section -->
<section class="projects-page">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="heading">
         <h2>Our Projects</h2>
       </div>
     </div>
     @foreach($projects as $project)
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
   </div>
 </div>
</section>


@endsection