@extends('main')

@section('title', '| Careers')

@section('stylesheets')

<link href="source/jquery.fancybox.css" type="text/css" rel="stylesheet">

@endsection

@section('content')
<!--banner section -->
<div class="next_banner">
  <figure><img src="images/next-banner-7.jpg" alt="image" class="img-responsive center-block"></figure>
  <div class="container">
    <div class="col-md-12">
      <ul>
        <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>
        <li> Gallery </li>
      </ul>
    </div>
  </div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="gallery">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="heading">
         <h2>Our Gallery</h2>
       </div>
     </div>
     @foreach($galleryImages as $galleryImage)
       <div class="col-md-3 col-sm-4 col-xs-6">
         <div class="gal-img">
           <figure><img src="images/{{ $galleryImage -> image }}" alt="image" class="img-responsive center-block"></figure>
           <a href="images/{{ $galleryImage -> image }}" class="fancybox" data-fancybox-group="gallery">

             <div class="hvr-efect">
               <i class="fa fa-plus" aria-hidden="true"></i>
             </div>
           </a>    
         </div>
       </div>
     @endforeach
   </div>
 </div>
</section>

@endsection