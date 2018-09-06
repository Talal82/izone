

<footer>
   <section class="footer">
       <div class="container">
           <div class="row">
               <div class="col-md-3 hidden-xs hidden-sm">
                   <div class="f-heading">
                       <h2>Web Links</h2>
                   </div>
                   <div class="fotr-links">
                       <ul>
                           <li><a href="{{ route('index') }}">Home</a></li>
                           <li><a href="{{ route('about') }}">About Us</a></li>
                           <li><a href="{{ route('projects') }}">Our Projects</a></li>
                           <li><a href="{{ route('services') }}">Our Services</a></li>
                           <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                           <li><a href="{{ route('careers') }}">Careers</a></li>
                           <li><a href="{{ route('contact') }}">Contact Us</a></li>
                       </ul>
                   </div>

               </div>
               <div class="col-md-2 col-sm-3 col-xs-12 hidden-xs">
                   <div class="f-heading">
                       <h2>Our Services</h2>
                   </div>
                   <div class="fotr-services">
                       <ul>
                        @foreach($services as $service)
                        <li><a href="{{ route('view_service',[$service -> id]) }}"> {{ $service -> name }} </a></li>
                        @endforeach
                    </ul>

                </div>

            </div>
            <div class="col-md-3 col-sm-5 col-xs-12">
               <div class="f-heading">
                   <h2>Contact Us</h2>
               </div>
               <div class="fotr-reachus">
                   <ul>
                       <li><p>{{ $footerInfo -> address }}</p></li>
                       <li>Telephone: {{ $footerInfo -> phone }}</li>
                       <li>Fax: {{ $footerInfo -> fax }}</li>
                   </ul>
               </div>
               <div class="s-icon">
                   <ul>
                    @foreach($socialIcons as $icon)
                      @if($icon -> link != '')
                       <li><a href="{{ $icon -> link }}" target="_blank"><i class="fa {{ $icon -> class_name }}" aria-hidden="true"></i></a></li>
                      @endif
                    @endforeach
                   </ul>
               </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-12">
               <div class="f-heading">
                   <h2>Location Map</h2>
               </div>
               <div id="map"  class="l-map">

               </div>

           </div>
       </div>

   </div>
</section>
<div class="c-rite">
   <div class="container">
       <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="c-left">
                   <p>© 2017-18  IZone  All rights reserved.</p>
               </div>
           </div>

           <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="c-last">
                   <p> Designed & Devoleped By: <a href="#" style="color:#eaeaea;">Tornado.ae</a></p>
               </div>
           </div>
       </div>
   </div>
   <div class="clearfix"></div>
</div>
</footer>
<!--main footer section-->

<!--center section -->  

<!-- main scripts added -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<!-- main scripts added -->

<!-- plugin scripts added -->

<script type="text/javascript" src="js/inline.js"></script>  
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script>
    function initMap(){
        var location = { lat: 25.204849, lng: 55.270782 };
        var myMap = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: myMap
        })
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATHcO-Rb-gabeGcIUlMwVhC7w_IWn2cqk&callback=initMap"></script>


<script type="text/javascript">
    $('.tabs li').click( function() {

        var vst = $(this).index();

        $('.tab-text').each(function() {
            $(this).css('display','none');

        });

        $('.tab-text').eq(vst).css('display','block')
        $(this).addClass('active');
        $(this).siblings().removeClass('active');


    });
    $('.main-tab-text > div:first-child').css('display','block');
</script>




@yield('scripts')