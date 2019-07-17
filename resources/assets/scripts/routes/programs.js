export default {
  init() {
    // JavaScript to be fired on all pages

    //Re layout after toggling accordion
    $(".accordion").on("click", function() {
      $(this).parent().parent().next('.accordion-content').toggle();
      $(this).children().toggle();
      $('#test-locations').isotope('layout');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
