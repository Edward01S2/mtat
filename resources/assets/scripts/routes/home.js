export default {
  init() {
    // JavaScript to be fired on the home page
    $('#commit-item').slick({
      arrows: false,
      dots: true,
      appendDots: ".append-dots",
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 767,
          settings: "unslick" 
        }
      ]
    });

    $('#testimony-slider').slick({
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

    $('#announce-slider').slick({
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
    // JavaScript to be fired on the home page, after the init JS
  },
};
