(function ($, undefined) {
  $(window).scroll(function () {
    var winTop = $(window).scrollTop();
    $("#masthead").css(
      "background-position",
      "center " + -(winTop * 0.5) + "px"
    );
  });
})(jQuery);