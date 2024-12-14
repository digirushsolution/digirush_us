$(document).ready(function() {

  $('#menuBtn').click(function() {

      var sideMenu = $('#sideMenu');

      if (sideMenu.css('left') === '0px') {

          sideMenu.css('left', '-450px');

      } else {

          sideMenu.css('left', '0px');

      }

  });



  $('.side-menu > ul > li > a').click(function(event) {

      event.preventDefault(); 



      var $this = $(this);

      var $subMenu = $this.siblings('.sub_menu');



      if ($subMenu.is(':visible')) {

          $subMenu.slideUp(); 

          $this.find('i').removeClass('fa-angle-up').addClass('fa-angle-down'); 

      } else {

          $('.sub_menu').slideUp(); 

          $('.fa-angle-up').removeClass('fa-angle-up').addClass('fa-angle-down'); 

          $subMenu.slideDown();

          $this.find('i').removeClass('fa-angle-down').addClass('fa-angle-up');

      }

  });

});


$(document).ready(function() {

  // Headers script 



  $('[class^="nav-item_"]').hover(

    function() {

      var itemNumber = $(this).attr('class').match(/nav-item_(\d+)/)[1];

      $('.custom_menu_' + itemNumber).stop(true, true).fadeIn(700);  // Adjust the speed as needed

    },

    function() {

      var itemNumber = $(this).attr('class').match(/nav-item_(\d+)/)[1];

      setTimeout(function() {

        if (!$('.custom_menu_' + itemNumber).is(':hover')) {

          $('.custom_menu_' + itemNumber).stop(true, true).fadeOut(600);  // Adjust the speed as needed

        }

      }, 200);

    }

  );



  $('[class^="custom_menu_"]').hover(

    function() {

      $(this).stop(true, true).fadeIn(500);  // Adjust the speed as needed

    },

    function() {

      $(this).stop(true, true).fadeOut(400);  // Adjust the speed as needed

    }

  );



  $('#arrowIcon').hover(

    function() {

      // Show the header section when the arrow icon is hovered

      $('#headerSection').stop(true, true).slideDown(300);  // Adjust the speed as needed

    },

    function() {

      // Hide the header section when the arrow icon is not hovered

      $('#headerSection').stop(true, true).slideUp(300);  // Adjust the speed as needed

    }

  );

});
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



// document.addEventListener("DOMContentLoaded", () => {
//   function counter(id, start, end, duration) {
//    let obj = document.getElementById(id),
//     current = start,
//     range = end - start,
//     increment = end > start ? 1 : -1,
//     step = Math.abs(Math.floor(duration / range)),
//     timer = setInterval(() => {
//      current += increment;
//      obj.textContent = current;
//      if (current == end) {
//       clearInterval(timer);
//      }
//     }, step);
//   }
//   counter("count1", 50, 107, 1000);
//   counter("count2", 9911, 10000, 1000);
//   counter("count3", 0, 21, 1000);
//    counter("count4", 10, 56, 1000);
//  });
 

