$(function(){
$("#owl-demo").owlCarousel({
  //autoPlay: 3000, //Set AutoPlay to 3 seconds
  items : 4,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3],
  navigation: true
  //autoHeight: true
});

  $("#testimonial").owlCarousel({
    //autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet : [768,1],
    itemsMobile: [479,1],
    navigation: true
  });

  $('.blog').each(function() {
    $(this).children('article').matchHeight({
      //byRow: byRow
    });
  });


  if($(window).width()<767){
    $('.mobile_menu_icon').on('click', function(){
      $('#top_menu .menu-header-menu-container').slideToggle(200);
    });

  }
});
