function initMap() {
    // The location of Uluru
    var uluru = {lat: 18.818445, lng: 99.031748};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }

  $(window).scroll(function(){
      var scrollTop = $(this).scrollTop();
      if(scrollTop > 1){
        $('nav').css('padding','5px 25px')
      }else{
          $('#navbar').css('padding', '25px')
      }
  })

  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    });
  });