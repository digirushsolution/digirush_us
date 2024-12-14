$(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
  
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
  
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
  
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        }
  
        e.preventDefault();
    });
  });
            
      function mobileMenu() {
        $("header.header-wrapper").after('<div class="mobile-navigation-menu"><button id="mobile-menu-close"><i class="la la-close"></i></button></div>');
        var menuWrapper = $("header .navigation-menu .main-menu").clone();
        $('.mobile-navigation-menu #mobile-menu-close').after(menuWrapper);
        
            $("#mobile-menu-close, .mobile-menu-icon").on("click", function () {
                $(".mobile-menu-icon").toggleClass("menu-open");
                $(".mobile-navigation-menu").toggleClass("open-mobile-menu");
            });

        $(".mobile-navigation-menu ul li:has(ul)").each(function () {
            $(this).append('<span class="dropdown-plus"></span>');
            $(this).addClass("dropdown_menu");
        });

        $(".mobile-navigation-menu .dropdown-plus").on("click", function () {
            $(this).prev("ul").slideToggle(300);
            $(this).toggleClass("dropdown-open");
            $(".mobile-navigation-menu ul li:has(ul)").toggleClass("dropdown-open");
        });

        $(".mobile-navigation-menu .dropdown_menu a").append("<span></span>");
    }

    mobileMenu();
    


$('#carousel_projects').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

$('#carousel_feature').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
var swiperTestimonial2 = new Swiper(".testimonial_carousel_2", {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    autoplay: false,
    speed: 400,
    pagination: false,
    navigation: {
      nextEl: '.carousel_button_next',
      prevEl: '.carousel_button_prev',
   },
    breakpoints: {
        320: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 25
        },
         767: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 30
        },
           1024: {
            slidesPerView: 3,
            slidesPerGroup: 1
        }
    }
});

document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
   let obj = document.getElementById(id),
    current = start,
    range = end - start,
    increment = end > start ? 1 : -1,
    step = Math.abs(Math.floor(duration / range)),
    timer = setInterval(() => {
     current += increment;
     obj.textContent = current;
     if (current == end) {
      clearInterval(timer);
     }
    }, step);
  }
  counter("count1", 50, 107, 1000);
  counter("count2", 9911, 10000, 1000);
  counter("count3", 0, 21, 1000);
   counter("count4", 10, 56, 1000);
 });
 

