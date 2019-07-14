export default {
  init() {
    // JavaScript to be fired on all pages

    $('#event-slider').slick({
      arrows: false,
      dots: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 767,
          settings: "unslick" 
        }
      ]
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
