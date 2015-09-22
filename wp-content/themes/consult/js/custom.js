$(function(){
$("#owl-demo").owlCarousel({
  //autoPlay: 3000, //Set AutoPlay to 3 seconds
  items : 4,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3],
  navigation: true
});
  if($(window).width()<767){
    $('.mobile_menu_icon').on('click', function(){
      $('#top_menu .menu-header-menu-container').slideToggle(200);
    });

  }
});
