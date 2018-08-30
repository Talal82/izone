@extends('main')

@section('title', '| Certificates')

@section('stylesheets')

<link href="source/jquery.fancybox.css" type="text/css" rel="stylesheet">

@endsection

@section('content')
<!--banner section -->
<div class="next_banner">
  <figure><img src="images/next-banner-6.jpg" alt="image" class="img-responsive center-block"></figure>
  <div class="container">
    <div class="col-md-12">
      <ul>
        <li><a href="index.html">I zone Electromechanical</a></li><span>/</span>
        <li>License & ISO Certificates</li>
      </ul>
    </div>
  </div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="certifcate">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="heading">
         <h2>License & ISO Certificates</h2>
       </div>
     </div>

     @foreach($certificates as $certificate)
     <div class="col-md-3 col-sm-4 col-xs-6">
       <div class="certi">
         <figure><img src="{{ asset('images/'.$certificate -> image) }}" alt="image" class="img-responsive center-block"></figure>
         <a href="{{ asset('images/'.$certificate -> image) }}" class="fancybox" data-fancybox-group="gallery">

           <div class="hvr-efect">
             <i class="fa fa-search-plus" aria-hidden="true"></i>
           </div>
         </a>    
       </div>
     </div>
    @endforeach

   </div>
 </div>
</section>


@endsection