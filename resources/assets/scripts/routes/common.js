export default {
  init() {
    // JavaScript to be fired on all pages
    $("#nav-toggle").click(function() {
      $("#main-nav").toggle();
      $("#menu-btn").toggle();
      $("#menu-close").toggle();
      $("#nav-brand").toggleClass("hidden");
      $("#nav-click").toggleClass("nav-click");
      // $("#nav-pos").toggleClass("justify-end-i");
      // $("#nav-color").toggleClass("bg-blue-700");
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
