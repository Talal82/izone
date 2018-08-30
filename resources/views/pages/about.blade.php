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
               <h3><i class="fa fa-check" aria-hidden="true"></i>{{ $value -> name }}</h3>
               <p>{!! $value -> detail !!}</p>
               @endforeach


           </div>
       </div>
   </div>
</div>
</section>


@endsection





