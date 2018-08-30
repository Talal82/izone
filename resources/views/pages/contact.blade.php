@extends('main')

@section('title', '| Careers')

@section('stylesheets')

    <style>
        #map1{
            height: 350px;
            width: 240px;
        }
        #map2{
            height: 350px;
            width: 240px;
        }
    </style>

@endsection

@section('content')
<!--banner section -->
<div class="next_banner">
  <figure><img src="images/next-banner-5.jpg" alt="image" class="img-responsive center-block"></figure>
  <div class="container">
      <div class="col-md-12">
          <ul>
              <li><a href="{{ route('index') }}">I zone</a></li><span>/</span>
              <li>Contact Us</li>
          </ul>
      </div>
  </div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
            @foreach($offices as $office)
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-6">
                        <div class="contct-detail">
                            <h2>{{ $office -> name }}</h2>
                            <p>{{ $office -> address }}</p>
                            <ul>
                                <li><span>P.O. Box:</span>{{ $office -> po_box }}</li>
                                <li><span>Telephone:</span>{{ $office -> phone }}</li>
                                <li><span>Fax:</span>{{ $office -> fax }}</li>
                                <li><span>Email:</span><a href="mailto:{{ $office -> email }}">{{ $office -> email }}</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @if($loop -> first)
                    <div class="col-md-5 col-sm-12 col-xs-6">
                        <div class="map">
                            <figure><div id="map1" ></div></figure>
                        </div>
                    </div>
                    @else
                        <div class="col-md-5 col-sm-12 col-xs-6">
                        <div class="map">
                            <figure><div id="map2" ></div></figure>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="fedback-frm">
                    <h2>Feedback Form</h2>
                    <p>Please fill up the following fields</p>

                    <form action="{{ route('contact.post') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" placeholder="name">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" placeholder="email">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" placeholder="phone">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea rows="7" name="body" placeholder="Questions or Comments"></textarea>
                                
                                <button type="submit">submit</button>
                                <button type="reset">clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 

@section('scripts')
<script type="text/javascript">
    var map, map2;

    function initialize(condition) {
    // create the maps
    var myOptions = {
        zoom: 14,
        center: new google.maps.LatLng(25.204849 , 55.270782),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map1"), myOptions);

    map2 = new google.maps.Map(document.getElementById("map2"), myOptions);
}
</script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATHcO-Rb-gabeGcIUlMwVhC7w_IWn2cqk&callback=initialize"></script>

@endsection
