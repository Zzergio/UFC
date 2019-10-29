(function($){
  $(function() {
    $('.menu-icon').on('click', function() {
      $(this).closest('.menu').toggleClass('menu-state-open');
    });
  });
})(jQuery);