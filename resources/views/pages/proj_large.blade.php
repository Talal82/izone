@extends('main')

@section('title', '| View Project')

@section('content')
     <!--banner section -->
     <div class="next_banner">
      <figure><img src="images/next-banner-3.jpg" alt="image" class="img-responsive center-block"></figure>
      <div class="container">
      <div class="col-md-12">
      <ul>
      <li><a href="index.html">I zone Electromechanical</a></li><span>/</span>
      <li><a href="projects.html">Projects</a></li><span>/</span>
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
    <figure><img src="images/project-large.jpg" alt="image" class="img-responsive center-block" id="larg-img"></figure>
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
    <h2>FIRST GULF BANK OFFICE BUILDING</h2>
    <div class="abcd">
    <div class="other-detail">
    <article>Project Name</article> <span>First Gulf Bank</span>
    </div>
    <div class="other-detail">
    <article>Owner</article> <span>First Gulf Bank</span>
    </div>
    <div class="other-detail">
    <article>Consultant</article> <span>Tecnimeont</span>
    </div>
    <div class="other-detail">
    <article>Status</article> <span>Ongoing</span>
    </div>
    <div class="clearfix"></div>
    </div>
    
    <div class="proj-details">
    <h3>Project Detail</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>
<br>
when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,  </p>
<a href="projects.html"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back to projects</a>
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
     <div class="col-md-3 col-sm-6 col-xs-12">
     <div class="proj-box">
     <div class="proje-img">
     <img src="images/proj-3.jpg" alt="image" class="img-responsivec center-block">
     
     <div class="icon-proj">
     <ul>
     <a href="proj-large.html"><li><i class="fa fa-search-plus" aria-hidden="true"></i></li></a>
     <a href="proj-large.html"><li><i class="fa fa-external-link" aria-hidden="true"></i></li></a>
     </ul>
     </div>
    
     </div>
     
     <div class="proje-detail">
     <h2>FIRST GULF BANK OFFICE BUILDING</h2>
     <p>OWNER: FIRST GULF BANK</p>
     <a href="proj-large.html"><i class="fa fa-share" aria-hidden="true"></i> more detail</a>
     </div>
     
     </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
     <div class="proj-box">
     <div class="proje-img">
     <img src="images/proj-4.jpg" alt="image" class="img-responsivec center-block">
     
     <div class="icon-proj">
     <ul>
     <a href="proj-large.html"><li><i class="fa fa-search-plus" aria-hidden="true"></i></li></a>
     <a href="proj-large.html"><li><i class="fa fa-external-link" aria-hidden="true"></i></li></a>
     </ul>
     </div>
    
     </div>
     
     <div class="proje-detail">
     <h2>FIRST GULF BANK OFFICE BUILDING</h2>
     <p>OWNER: FIRST GULF BANK OWNER: FIRST GULF BANK</p>
     <a href="proj-large.html"><i class="fa fa-share" aria-hidden="true"></i> more detail</a>
     </div>
     
     </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
     <div class="proj-box">
     <div class="proje-img">
     <img src="images/proj-5.jpg" alt="image" class="img-responsivec center-block">
     
     <div class="icon-proj">
     <ul>
     <a href="proj-large.html"><li><i class="fa fa-search-plus" aria-hidden="true"></i></li></a>
     <a href="proj-large.html"><li><i class="fa fa-external-link" aria-hidden="true"></i></li></a>
     </ul>
     </div>
    
     </div>
     
     <div class="proje-detail">
     <h2>FIRST GULF BANK OFFICE BUILDING</h2>
     <p>OWNER: FIRST GULF BANK</p>
     <a href="proj-large.html"><i class="fa fa-share" aria-hidden="true"></i> more detail</a>
     </div>
     
     </div>
    </div>
   <div class="col-md-3 col-sm-6 col-xs-12">
     <div class="proj-box">
     <div class="proje-img">
     <img src="images/proj-5.jpg" alt="image" class="img-responsivec center-block">
     
     <div class="icon-proj">
     <ul>
     <a href="proj-large.html"><li><i class="fa fa-search-plus" aria-hidden="true"></i></li></a>
     <a href="proj-large.html"><li><i class="fa fa-external-link" aria-hidden="true"></i></li></a>
     </ul>
     </div>
    
     </div>
     
     <div class="proje-detail">
     <h2>FIRST GULF BANK OFFICE BUILDING</h2>
     <p>OWNER: FIRST GULF BANK</p>
     <a href="proj-large.html"><i class="fa fa-share" aria-hidden="true"></i> more detail</a>
     </div>
     
     </div>
    </div>
    
    
    
     </div>
     </div>
     </section>
    
@endsection