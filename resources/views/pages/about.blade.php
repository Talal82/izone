@extends('main')

@section('title','| About Us')

@section('content')
<!--banner section -->
<div class="next_banner">
  <figure><img src="images/next-banner-1.jpg" alt="image" class="img-responsive center-block"></figure>
  <div class="container">
      <div class="col-md-12">
          <ul>
              <li><a href="{{ route('index') }}">I zone</a></li><span>/</span>
              <li>About Us</li>
          </ul>
      </div>
  </div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="abt-page">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="heading">


                 <h2>{{ $about -> title }}</h2>
                 <div class="abt-img">
                     <figure><img src="images/{{ $about -> main_image }}" alt="image" class="img-responsive center-block"></figure>
                 </div>

                 {!! $about -> about_detail !!}
     {{-- <p>My Sincere Thanks and Appreciationto all our valued Clients and BusinessPartners for theircontinued support and contributions to the Success of operationthrough the years.</p>
     
     <p>Having my Master Degree in Mechanical Engineeringfrom American University of Beirut in 1987with Distinction was the beginning of my careerin electromechanical works industry. Thereafter, I worked for three (3) years in Lebanon with a Swisscompany.My responsibility and obligation were to handle Major breakdown problemsdue to metal failure in a big Factories like Cement, Sugar, Aluminum,Ceramic, Glass, Paper Mills, Chemical,Air Conditioning, etc.It was a non-stop Challenging mission and Dedication towards work.
</p>

<p>In 1990, I moved to Ghana, Africa as a Senior Client Representativefor the execution of complete electromechanical worksin Ambassador -Five (5) Star Hotel.
</p>
<p>it was in 1992where I landed in U.A.E.,whereby I managed the MEP works for many Prestigious and Special projects .I have successfully established myself in various business activitiescovering Commercial & Residential City Complexes, Oilfield & Industrial, Airports,Hospitals, Data Centers, Hotels, Universities, ShoppingMalls, Stadiums, Palaces, Headquarters, up to 84-storey & 5 basement Towers,& other large residential, commercial, and industrial projects,with nearly 10 Billion Dhs. of a total contract value.  
</p>
<p>To be SUCCESSFUL! You should enjoy Distinction, have professional look towards the MEP industry,keep Exploring, and whatever big you are or the responsibility you handle,time-to-time, you shouldGo Down To Small Details,exchange Ideas with your team, andhave one common Objective.  </p>

<p><span>More than 3 decades of generating new ideas to electromechanical services & providingsolutions and integrity…</span><br>

I-Zone believes that the principal ingredient of a long-term business success are theprofessional and cooperative approach, talent and commitmentof our employees, exchanging ideas, have proper planning, and fast track the knowledge and awarenessto deliver exceptional quality project.</p> --}}

</div>
</div>
</div>
</div>
</section>
<section class="abt-page2" style="background-color:#f8f8f8; padding-top:30px;">
 <section class="container">
     <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="o-history" style="background: url(images/{{ $about -> mission_image }}) center top no-repeat;">
             <div class="abcd" style="background: rgba(0,0,0, 0.46); padding:53px 15px; margin-bottom:30px;">
                 <h2>Our Mission</h2>
             </div>
             <p>{!! $about -> mission_detail !!}
             </p>
         </div>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="o-history" style="background: url(images/{{ $about -> vision_image }}) center top no-repeat;">
             <div class="abcd" style="background: rgba(0,0,0, 0.46);padding:53px 15px; margin-bottom:30px;">
                 <h2>Our Vision</h2>
             </div>
             <p>{!! $about -> vision_detail !!}
             </p>
         </div>
     </div>
 </div>
</section>
</section>
<section class="abt-page3">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
            <div class="heading">
                 <h2>Our Values</h2>

                 <p>Our values provide the framework for how we do at I-Zone. It gives us confidence that we are using the same principles to help us to make  decisions throughout our global organization.</p>
                 <br>


                 @foreach($values as $value)
                 <h3><i class="fa fa-check" aria-hidden="true"></i>{{ $value -> name }}</h3><br>
                 <p>{{ $value -> detail }}
                 </p>
                 @endforeach

                 
             </div>
         </div>
     </div>
 </div>
</section>


@endsection





