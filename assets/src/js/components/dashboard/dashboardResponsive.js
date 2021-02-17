;(function ($) {

  //dashboard content responsive fix
  
  var tabContentWidth = $(".atbd_dashboard_wrapper .atbd_tab-content").innerWidth();
  if(tabContentWidth < 650){
    $(".atbd_dashboard_wrapper .atbd_tab-content").addClass("atbd_tab-content--fix");
  }

  $(window)
    .bind("resize", function () {
      if ($(this).width() <= 1199) {
        $(".directorist-user-dashboard__nav").addClass("directorist-dashboard-nav-collapsed");
      }
    })
    .trigger("resize");

  $('.directorist-dashboard__nav--close').on('click', function(){

    $(".directorist-user-dashboard__nav").addClass('directorist-dashboard-nav-collapsed');

  })

})(jQuery);