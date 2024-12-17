$(".accordion-item").click(function(){ 
    $(".accordion-item").not(this).removeClass("open");
    $(this).toggleClass("open");  
});


$('.responsive-card-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
   
    ]
  });


  $('.team-sliding').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
   
    ]
  });

  
  
  $('.logo-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      } 
    ]
  });



  $('.ss-card-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      } 
    ]
  });





  $('.img-video-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });

$(".team-item").click(function(){
  $(".team-modal").show();
    var imgs_pro         = $(this).data("img"); 
    var description      = $(this).data("description");
    var position         = $(this).data("position"); 
    $(".team-modal .modal-img").attr("src",imgs_pro);
    $(".team-modal .modal-content").html(description); 
    
});

$(".team-modal .modal-close").click(function(){
  $(".team-modal").hide();
});


var $bulletin_slider = $('.bulletin-slider');

$bulletin_slider.on('init', function (event, slick) {
    var totalSlides = slick.slideCount; 
    $('.num-pack-bulletins').html(`01 / <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$bulletin_slider.slick({
  dots: false,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 1800,
  speed: 1000,
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows:false,
  fade:false,
  responsive: [
  {
  breakpoint: 1025,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: true
  }
  },
  {
  breakpoint: 993,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 1
  }
  },
  {
  breakpoint: 769,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
  }
  },
  {
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
  }
  }
  ]
});

$bulletin_slider.on('afterChange', function (event, slick, currentSlide) {
  var totalSlides = slick.slideCount; 
  var slideNumber = (currentSlide + 1).toString().padStart(2, '0');
  $('.num-pack-bulletins').html(`${slideNumber} / <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$('.arrow-num-bulletins .left-arrow-bulletins').click(function () {
  $bulletin_slider.slick('slickPrev');
});

$('.arrow-num-bulletins .right-arrow-bulletins').click(function () {
  $bulletin_slider.slick('slickNext');
});

$brands_slider = $('.brands-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  rows:2,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 0,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        rows:1
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        centerMode:true,
        centerModePadding:"100px",
        rows:1
      }
    }
  ]
  });
$('.arrow-right-b').on('click', function() {
$brands_slider.slick('slickNext');
});
$('.arrow-left-b').on('click', function() {
$brands_slider.slick('slickPrev');
});

function initializeSlider() {
  if ($(window).width() < 768) {
    if (!$('.services-slider').hasClass('slick-initialized')) { 
      $('.services-slider').slick({
        dots: false,
        arrows: false,
        centerMode: false,
        centerPadding: '100px',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 480,
            settings: {
              centerMode: false,
              centerPadding: '20px',
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    }
  } else {
    if ($('.services-slider').hasClass('slick-initialized')) { 
      $('.services-slider').slick('unslick'); 
    }
  }
}

// Initializing the slider
initializeSlider();

// Re-initializing on window resize
$(window).resize(function() {
  initializeSlider();
});

$awards_slider = $('.awards-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 0,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        rows:1
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        centerMode:true,
        centerModePadding:"100px",
        rows:1
      }
    }
  ]
  });
$('.arrow-right-a').on('click', function() {
$awards_slider.slick('slickNext');
});
$('.arrow-left-a').on('click', function() {
$awards_slider.slick('slickPrev');
});

$other_services_slider = $('.other-services-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 0,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 769,
      settings: {
        centerMode: false,
        centerPadding: '20px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
$('.arrow-right-o').on('click', function() {
$other_services_slider.slick('slickNext');
});
$('.arrow-left-o').on('click', function() {
$other_services_slider.slick('slickPrev');
});