<header>
     <div class="tp-br">
     <div class="container">
     <div class="row">
     <div class="col-md-4 col-sm-12 col-xs-12">
     <div class="tp-logo">
		 <figure><a href=""><img src="images/logo.jpg" alt="image" class="img-responsive center-block"></a></figure>
     </div>
     </div>
     
		 <div class="col-md-1 hidden-sm hidden-xs"></div>
		 <div class="col-md-3 col-sm-4 col-xs-12">
			 <div class="tp-shrt-info">
				 <i class="fa fa-map-marker" aria-hidden="true"></i>
				 <h2>Find Us On</h2>
				 <p>{{ $headerInfo -> address }}</p>
			 </div>
		 </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
			 <div class="tp-shrt-info">
				 <i class="fa fa-envelope" aria-hidden="true"></i>
				 <h2>Email Us</h2>
				 <p><a href="mailto:{{ $headerInfo -> email }}">{{ $headerInfo -> email }}</a></p>
			 </div>
		 </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
			 <div class="tp-shrt-info">
				 <i class="fa fa-phone" aria-hidden="true"></i>
				 <h2>Call Us</h2>
				 <p>{{ $headerInfo -> phone }}</p>
			 </div>
		 </div>
     </div>
     </div>
     <div class="clearfix"></div>
     </div>   
     
</header>