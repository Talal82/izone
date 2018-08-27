@extends('main')

@section('title', '| Careers')

@section('content')    
<!--banner section -->
<div class="next_banner">
     <figure><img src="images/next-banner-4.jpg" alt="image" class="img-responsive center-block"></figure>  
     <div class="container">
         <div class="col-md-12">
              <ul>
                   <li>I zone Electromechanical</li><span>/</span>
                   <li><a href="services.html">Services</a></li>

              </ul>
         </div>
    </div>  
</div>  
<!--banner section --> 

<!--center section -->
<section class="services-page">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <div class="heading">
                         <h2>Our Services</h2>
                         <p>We have a commitment to our customers. We care about them, listen to them and work to anticipate their needs, generate ideas and solve their problems. Customer satisfaction is a priority for everyone in the organization.We pursue best practice outcomes and, where possible, contribute to setting even higher standards of excellence. It is this attitude that provides our clients and ourselves with superior results and provides our people with challenging and stimulating opportunities to extend their skills.
                         </p>
                    </div>
               </div>

               @foreach($services as $service)
               <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="services-box">
                         <div class="services-img">
                              <a href="services-large.html"><img src="images/{{ $service -> image }}" alt="image" class="img-responsive center-block"></a>
                              <div class="servies-icon">
                                   <a href="#"><img src="images/{{ $service -> visible_icon }}" alt="image" class="img-responsive center-block"></a>
                              </div>
                         </div>
                         <div class="services-detail">
                              <h2>{{ $service -> name }}</h2>
                              <p>{{ (strlen($service -> detail) > 50)? substr($service -> detail,0, 50).'...': $service -> detail }}</p>
                              <a href="{{ route('view_service',[$service -> id]) }}"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>more detail</a>
                         </div>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>

@endsection