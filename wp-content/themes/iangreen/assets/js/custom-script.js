$(document).ready(function () {
    $(".home-banner-slider").owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:true,
        autoplay:false,
        autoplaySpeed:1000,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"> <path fill="#ffffff" fill-rule="evenodd" d="M1.03466296,30.4285714 L30.7316172,0.731617192 C30.8989847,0.564249638 30.8989847,0.292893219 30.7316172,0.125525665 C30.5642496,-0.0418418884 30.2928932,-0.0418418884 30.1255257,0.125525665 L0.125525665,30.1255257 C-0.0418418884,30.2928932 -0.0418418884,30.5642496 0.125525665,30.7316172 L30.1255257,60.7316172 C30.2928932,60.8989847 30.5642496,60.8989847 30.7316172,60.7316172 C30.8989847,60.5642496 30.8989847,60.2928932 30.7316172,60.1255257 L1.03466296,30.4285714 Z" transform="translate(21 10)"/></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"><path fill="#ffffff" fill-rule="evenodd" d="M1.03466296,30.4285714 L30.7316172,0.731617192 C30.8989847,0.564249638 30.8989847,0.292893219 30.7316172,0.125525665 C30.5642496,-0.0418418884 30.2928932,-0.0418418884 30.1255257,0.125525665 L0.125525665,30.1255257 C-0.0418418884,30.2928932 -0.0418418884,30.5642496 0.125525665,30.7316172 L30.1255257,60.7316172 C30.2928932,60.8989847 30.5642496,60.8989847 30.7316172,60.7316172 C30.8989847,60.5642496 30.8989847,60.2928932 30.7316172,60.1255257 L1.03466296,30.4285714 Z" transform="matrix(-1 0 0 1 59 10)"/></svg>'],
        smartSpeed:1500,
        autoplayHoverPause:true,
        responsive:{
0:{
    items:1,
    nav:false,
    width:100,
    dots:false
},
768:{
   items:1,
    nav:false
},
1000:{
  nav:true,
},
1200:{
  nav:true,
},
1400:{
  nav:true,
},
1600:{
  nav:true,
},
1800:{
  nav:true,
}
}
    });
  
    $('.cover-slider').owlCarousel({
stagePadding: 200,
loop:true,
margin:10,
nav:true,
video:true,
items:1,
lazyLoad: true,
nav:false,
responsive:{
0:{
    items:1,
    stagePadding: 60
},
600:{
    items:1,
    stagePadding: 100
},
1000:{
    items:1,
    stagePadding: 200
},
1200:{
    items:1,
    stagePadding: 250
},
1400:{
    items:1,
    stagePadding: 200
},
1600:{
    items:1,
    stagePadding: 350
},
1800:{
    items:1,
    stagePadding: 400
}
}
});
$(".testimonial-slider").owlCarousel({
  items:1,
  loop:true,
  nav:true,
  dots:true,
  autoplay:false,
  autoplaySpeed:1000,
  navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"> <path fill="#afadad" fill-rule="evenodd" d="M1.03466296,30.4285714 L30.7316172,0.731617192 C30.8989847,0.564249638 30.8989847,0.292893219 30.7316172,0.125525665 C30.5642496,-0.0418418884 30.2928932,-0.0418418884 30.1255257,0.125525665 L0.125525665,30.1255257 C-0.0418418884,30.2928932 -0.0418418884,30.5642496 0.125525665,30.7316172 L30.1255257,60.7316172 C30.2928932,60.8989847 30.5642496,60.8989847 30.7316172,60.7316172 C30.8989847,60.5642496 30.8989847,60.2928932 30.7316172,60.1255257 L1.03466296,30.4285714 Z" transform="translate(21 10)"/></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"><path fill="#afadad" fill-rule="evenodd" d="M1.03466296,30.4285714 L30.7316172,0.731617192 C30.8989847,0.564249638 30.8989847,0.292893219 30.7316172,0.125525665 C30.5642496,-0.0418418884 30.2928932,-0.0418418884 30.1255257,0.125525665 L0.125525665,30.1255257 C-0.0418418884,30.2928932 -0.0418418884,30.5642496 0.125525665,30.7316172 L30.1255257,60.7316172 C30.2928932,60.8989847 30.5642496,60.8989847 30.7316172,60.7316172 C30.8989847,60.5642496 30.8989847,60.2928932 30.7316172,60.1255257 L1.03466296,30.4285714 Z" transform="matrix(-1 0 0 1 59 10)"/></svg>'],
  smartSpeed:1500,
  autoplayHoverPause:true,
  responsive:{
0:{
    items:1,
    nav:false
},
768:{
   items:1,
    nav:false
},
1000:{
  nav:true,
},
1200:{
  nav:true,
},
1400:{
  nav:true,
},
1600:{
  nav:true,
},
1800:{
  nav:true,
}
}
});

  // Gets the video src from the data-src on each button
  var $videoSrc;
  $(".video-popup").click(function() {
    $videoSrc = $(this).attr("data-src");
  });
  // when the modal is opened autoplay it
  $("#myModal").on("shown.bs.modal", function(e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1"
    );
  });
  // stop playing the youtube video when I close the modal
  $("#myModal").on("hide.bs.modal", function(e) {
    // a poor man's stop video
    $("#video").attr("src", $videoSrc);
  });
  
});
