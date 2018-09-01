@extends('main')

@section('title', '| View Serice')

@section('content')
     <!--banner section -->
     <div class="next_banner">
     <figure><img src="images/next-banner-5.jpg" alt="image" class="img-responsive center-block"></figure> 
     <div class="container">
     <div class="col-md-12">
     <ul>
     <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>
     <li><a href="{{ route('services') }}">Services</a></li><span>/</span>
     <li>{{ $service -> name }} Service</li>
     </ul>   
     </div>
     </div>
      </div>  
     <!--banner section --> 
      
     <!--center section -->
     <section class="larg-services-page">
     <div class="container">
     <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="heading">
     <h2>{{ $service -> name }}</h2>
     <a href="{{ route('services') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i>back to services</a>
     </div>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
     <div class="service-detail">
     <p>{{ $service -> full_detail }}</p>
     
     <ul>
     <li>We undertake Annual Maintenance Contract and other related services</li>
     <li>Contract and other related services</li>
     </ul>
     </div>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
     <div class="service-img">
     <figure><img src="{{ asset('images/'.$service -> image) }}" alt="image" class="img-responsive center-block"></figure>
     </div>
     </div>
     </div>
     </div>
     </section>
    
    
    
 @endsection