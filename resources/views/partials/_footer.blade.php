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
     <li><a href="index.html">Home</a></li>
     <li><a href="about.html">About Us</a></li>
     <li><a href="projects.html">Our Projects</a></li>
     <li><a href="services.html">Our Services</a></li>
     <li><a href="gallery.html">Our Gallery</a></li>
     <li><a href="careers.html">Careers</a></li>
     <li><a href="contact.html">Contact Us</a></li>
     
     </ul>
     </div>
     
     </div>
     <div class="col-md-2 col-sm-3 col-xs-12 hidden-xs">
     <div class="f-heading">
     <h2>Our Services</h2>
     </div>
     <div class="fotr-services">
     <ul>
    <li><a href="services-large.html">Mechanical</a></li>
        <li><a href="services-large.html">Electrical</a></li>
        <li><a href="services-large.html">Plumbing</a></li>
        <li><a href="services-large.html">Fire Fighting</a></li>
     </ul>
     
     </div>
     
     </div>
     <div class="col-md-3 col-sm-5 col-xs-12">
     <div class="f-heading">
     <h2>Contact Us</h2>
     </div>
     <div class="fotr-reachus">
     <ul>
     <li><p>Ms. Sanaa & Amna Omeir Building
M-2, Tourist Club Area, Near K.M.Hyper market,</p></li>
<li>Telephone: + 971- 2-642-1550</li>
<li>Fax: 971-2-642-1552</li>
     </ul>
     </div>
     <div class="s-icon">
     <ul>
     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
     </ul>
     </div>
     </div>
     <div class="col-md-3 col-sm-4 col-xs-12">
     <div class="f-heading">
     <h2>Location Map</h2>
     </div>
     <div class="l-map">
     <img src="images/map.jpg" alt="image">
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