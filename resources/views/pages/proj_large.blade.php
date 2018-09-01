@extends('main')

@section('title', '| View Project')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Exo:400,500" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/mediaquries.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

@endsection

@section('content')
<!--banner section -->
<div class="next_banner">
  <figure><img src="images/next-banner-3.jpg" alt="image" class="img-responsive center-block"></figure>
  <div class="container">
      <div class="col-md-12">
          <ul>
              <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>
              <li><a href="{{ route('projects') }}">Projects</a></li><span>/</span>
              <li>OngoingProjects</li>
          </ul>
      </div>
  </div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="proj-larg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Our Projects</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="larg-pro">
                    <figure><img src="{{ asset('images/'.$project -> main_image) }}" alt="image" class="img-responsive center-block" id="larg-img"></figure>
                </div>
                <div class="gallery">
                    <div class="owl-demo2 owl-carousel owl-theme">
                        <div class="item">
                            <div class="galler-img">
                                <img src="images/gallery-proj-1.jpg" alt="image" class="img-responsive center-block" onclick="document.getElementById('larg-img').src='images/gallery-proj-1.jpg'">
                            </div>
                        </div>
                        <div class="item">
                            <div class="galler-img">
                                <img src="images/gallery-proj-2.jpg" alt="image" class="img-responsive center-block" onclick="document.getElementById('larg-img').src='images/gallery-proj-2.jpg'" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="galler-img">
                                <img src="images/gallery-proj-3.jpg" alt="image" class="img-responsive center-block" onclick="document.getElementById('larg-img').src='images/gallery-proj-3.jpg'">
                            </div>
                        </div>
                        <div class="item">
                            <div class="galler-img">
                                <img src="images/gallery-proj-4.jpg" alt="image" class="img-responsive center-block" onclick="document.getElementById('larg-img').src='images/gallery-proj-4.jpg'">
                            </div>
                        </div>
                        <div class="item">
                            <div class="galler-img">
                                <img src="images/gallery-proj-4.jpg" alt="image" class="img-responsive center-block" onclick="document.getElementById('larg-img').src='images/gallery-proj-4.jpg'">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>                 
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="dtail-box">
                    <h2>{{ $project -> title }}</h2>
                    <div class="abcd">
                        <div class="other-detail">
                            <article>Project Name</article> <span>{{ $project -> name }}</span>
                        </div>
                        <div class="other-detail">
                            <article>Owner</article> <span>{{ $project -> owner }}</span>
                        </div>
                        <div class="other-detail">
                            <article>Consultant</article> <span>{{ $project -> consultant }}</span>
                        </div>
                        <div class="other-detail">
                            <article>Status</article> <span>{{ $project -> status }}</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="proj-details">
                        <h3>Project Detail</h3>
                        <p>{{ $project -> detail }}</p>
                        <a href="{{ $project -> status == 'Completed' ? route('completed_projects'): route('ongoing_projects') }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back to projects</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> 
<section class="projects-page">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="heading">
                 <h2>Related Projects</h2>
             </div>
         </div>
         @foreach($relatedProjects as $project)
         <div class="col-md-3 col-sm-6 col-xs-12">
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
         @endforeach}
     </div>
 </div>
</section>

@endsection