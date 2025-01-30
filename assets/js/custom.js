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
    $('.num-pack-bulletins').html(`<b>01</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$bulletin_slider.slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay: false,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
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
    slidesToShow: 2,
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
  $('.num-pack-bulletins').html(`<b>${slideNumber}</b> / <span>${totalSlides.toString().padStart(2, '0')}</span>`);
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
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  rows:1,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        rows:1
      }
    },
    {
      breakpoint:993,
      settings: {
        slidesToShow: 3,
        rows:1
      }
    },
    {
      breakpoint: 768,
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
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 2,
        slidesToScroll: 1,
        draggable: true,
        touchMove: true,
        swipeToSlide: true,
        swipe: 200,
        pauseOnHover: true,
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
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 5,
  slidesToScroll: 1,
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
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
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

$pdf_slider = $('.pdf-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 769,
      settings: {
        centerMode: false,
        centerPadding: '20px',
        slidesToShow: 1,
      }
    }
  ]
  });

  document.addEventListener('DOMContentLoaded', function () {
    const prevPageLink = document.querySelector('.prev-page');
    const nextPageLink = document.querySelector('.next-page');
    const pageNumbers = document.querySelectorAll('.page-number');
    const currentPage = parseInt(document.querySelector('.current-page').textContent, 10);
    const totalPages = pageNumbers.length; 
  
    function updateButtonState() {
        if (currentPage === 1) {
            prevPageLink.classList.add('disabled');
            prevPageLink.style.pointerEvents = 'none';
        } else {
            prevPageLink.classList.remove('disabled');
            prevPageLink.style.pointerEvents = 'auto';
        }
  
        if (currentPage === totalPages) {
            nextPageLink.classList.add('disabled');
            nextPageLink.style.pointerEvents = 'none';
        } else {
            nextPageLink.classList.remove('disabled');
            nextPageLink.style.pointerEvents = 'auto';
        }
    }
  
    function navigateToPage(pageNumber) {
        window.location.href = `?paged=${pageNumber}`;
    }
  
    prevPageLink.addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage > 1) {
            navigateToPage(currentPage - 1);
        }
    });
  
    nextPageLink.addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            navigateToPage(currentPage + 1);
        }
    });
  
    pageNumbers.forEach(pageNumber => {
        pageNumber.addEventListener('click', function (e) {
            e.preventDefault();
            const page = parseInt(this.textContent, 10);
            navigateToPage(page);
        });
    });
  
    updateButtonState();
  });

  var $industry_land_slider = $('.industry-land-slider');

$industry_land_slider.on('init', function (event, slick) {
    var totalSlides = slick.slideCount; 
    $('.num-pack-indus').html(`<b>01</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$industry_land_slider.slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
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

$industry_land_slider.on('afterChange', function (event, slick, currentSlide) {
  var totalSlides = slick.slideCount; 
  var slideNumber = (currentSlide + 1).toString().padStart(2, '0');
  $('.num-pack-indus').html(`<b>${slideNumber}</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$('.arrow-num-indus .left-arrow-indus').click(function () {
  $industry_land_slider.slick('slickPrev');
});

$('.arrow-num-indus .left-arrow-indus').click(function () {
  $industry_land_slider.slick('slickNext');
});

var $threat_more_slider = $('.threat-more-slider');

$threat_more_slider.on('init', function (event, slick) {
    var totalSlides = slick.slideCount; 
    $('.num-pack-bm').html(`<b>01</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$threat_more_slider.slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
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

$threat_more_slider.on('afterChange', function (event, slick, currentSlide) {
  var totalSlides = slick.slideCount; 
  var slideNumber = (currentSlide + 1).toString().padStart(2, '0');
  $('.num-pack-bm').html(`<b>${slideNumber}</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$('.arrow-num-bm .left-arrow-bm').click(function () {
  $threat_more_slider.slick('slickPrev');
});

$('.arrow-num-bm .left-arrow-bm').click(function () {
  $threat_more_slider.slick('slickNext');
});

var $threat_slider = $('.threat-slider');

$threat_slider.on('init', function (event, slick) {
    var totalSlides = slick.slideCount; 
    $('.num-pack-bms').html(`<b>01</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$threat_slider.slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: false,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        centerPadding: '20px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$threat_slider.on('afterChange', function (event, slick, currentSlide) {
  var totalSlides = slick.slideCount; 
  var slideNumber = (currentSlide + 1).toString().padStart(2, '0');
  $('.num-pack-bms').html(`<b>${slideNumber}</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$('.arrow-num-bms .left-arrow-bms').click(function () {
  $threat_slider.slick('slickPrev');
});

$('.arrow-num-bms .right-arrow-bms').click(function () {
  $threat_slider.slick('slickNext');
});

jQuery(document).ready(function ($) {
  /**
   * Function to load events via AJAX.
   * @param {string} searchTerm - The search term for filtering events.
   * @param {number} page - The page number for pagination.
   */
  function loadEvents(searchTerm = '', page = 1) {
      $.ajax({
          url: ajax_params.ajax_url, 
          type: 'POST',
          data: {
              action: 'filter_events',
              search: searchTerm,
              paged: page,
          },
          beforeSend: function () {
              $('#event-content').html('<p>Loading events...</p>');
          },
          success: function (response) {
              if (response.events && response.pagination) {
                  $('#event-content').html(response.events); 
                  $('#pagination').html(response.pagination);
              } else {
                  $('#event-content').html('<p>No events found.</p>');
                  $('#pagination').html(''); 
              }
          },
          error: function () {
              console.error('Error fetching events.');
              $('#event-content').html('<p>An error occurred. Please try again later.</p>');
          },
      });
  }

  $('#search').on('keyup', function () {
      const searchTerm = $(this).val(); 
      loadEvents(searchTerm, 1); 
  });

  $('#pagination').on('click', '.page-link', function (e) {
      e.preventDefault(); 
      const page = $(this).data('page'); 
      const searchTerm = $('#search').val();
      if (page) {
          loadEvents(searchTerm, page); 
      }
  });

  loadEvents();
});

var $news_more_slider = $('.news-more-slider');

$news_more_slider.on('init', function (event, slick) {
    var totalSlides = slick.slideCount; 
    $('.num-pack-nw').html(`<b>01</b><span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$news_more_slider.slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
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

$news_more_slider.on('afterChange', function (event, slick, currentSlide) {
  var totalSlides = slick.slideCount; 
  var slideNumber = (currentSlide + 1).toString().padStart(2, '0');
  $('.num-pack-nw').html(`<b>${slideNumber}</b>/ <span>${totalSlides.toString().padStart(2, '0')}</span>`);
});

$('.arrow-num-nw .left-arrow-nw').click(function () {
  $news_more_slider.slick('slickPrev');
});

$('.arrow-num-nw .left-arrow-nw').click(function () {
  $news_more_slider.slick('slickNext');
});

$image_news_slider = $('.image-news-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  touchMove: true,
  swipeToSlide: true,
  swipe: 200,
  pauseOnHover: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [ 
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 769,
      settings: {
        centerMode: false,
        centerPadding: '20px',
        slidesToShow: 1,
      }
    }
  ]
  });

  $(".career-item .link-c").click(function(){
    $(".career-modal").show();
    var image        = $(this).closest(".career-item").data("career_single_image"); 
    $(".career-modal .image-container-model img.career-image ").attr( "src", image );
  });

  $(".career-modal .modal-close").click(function(){
    $(".career-modal").hide();
  });

  document.addEventListener('DOMContentLoaded', function() {
    const subjectField = document.querySelector('[name="subject-services"]');
    if (subjectField) {
         subjectField.value = document.title;
    }
});

$(".award-div .award-inner .btn-as").click(function(){
  $(".award-modal").show();
  var image        =  $(this).closest(".award-inner").data("aa_award_image_url"); 
  $(".award-modal .image-container-model img.award-image ").attr( "src", image );
});
$(".award-modal .modal-close").click(function(){
  $(".award-modal").hide();
  });

  // JavaScript code to handle scroll events and show/hide the header
  let lastScrollTop = 0; // to keep track of last scroll position
  const header = document.querySelector('header'); // the header element
  let ticking = false;

  window.addEventListener('scroll', function() {
  if (!ticking) {
    window.requestAnimationFrame(function() {
    handleScroll();
    ticking = false;
    });
    ticking = true;
  }
  });

 function handleScroll() {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop) {
    header.classList.add('--hidden');
    header.classList.remove('sticky');
  } else {
    if (currentScroll > 0) {
    header.classList.remove('--hidden');
    header.classList.add('sticky');
    } else {
    header.classList.remove('sticky');
    }
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; 
  }

