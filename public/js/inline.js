$(document).ready(function() {

$(".owl-demo1").owlCarousel({

    items :2,

   //loop:true,

   rewindNav : true,

   nav: true,

   loop: true,
   
   autoWidth:true,

   itemsDesktop : [1200,2], // 2 items between 1000px and 901px

  itemsDesktopSmall : [1000,2], // betweem 900px and 601px

  itemsTablet: [767,1], // 2 items between 600 and 480

  itemsMobile : [480,1] , // 1 item between 479 and 0
  

    navigation: true,

    navigationText: [

 "<i class='fa fa-chevron-left'></i>",

      "<i class='fa fa-chevron-right'></i>"

      ],

autoPlay:false,

    paginationSpeed : 2000,

	slideSpeed: 1500,

 });

    
});

$(document).ready(function() {

$(".owl-demo2").owlCarousel({

    items :5,

   //loop:true,

   rewindNav : true,

   nav: true,

   loop: true,
   
   autoWidth:true,

   itemsDesktop : [1200,4], // 2 items between 1000px and 901px

  itemsDesktopSmall : [1000,4], // betweem 900px and 601px

  itemsTablet: [767,4], // 2 items between 600 and 480

  itemsMobile : [480,3] , // 1 item between 479 and 0
  

    navigation: true,

    navigationText: [

 "<i class='fa fa-chevron-left'></i>",

      "<i class='fa fa-chevron-right'></i>"

      ],

autoPlay:false,

    paginationSpeed : 2000,

	slideSpeed: 1500,

 });

    
});
