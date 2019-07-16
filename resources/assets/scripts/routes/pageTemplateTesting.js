export default {
  init() {
    // JavaScript to be fired on all pages

    $('#test-date').datepicker({
      beforeShow: function (input, inst) {
        setTimeout(function(){
            inst.dpDiv.outerWidth($(input).outerWidth());
        },0);
      },
    });
    
    $('#test-locations').isotope({
      // options
      itemSelector: '#test-location',
      layoutMode: 'vertical',
    });

    var $output = $('#output');
    var $checkboxes = $('#ui-inputs input');

    $checkboxes.change( function() {
      // map input values to an array
      var inclusives = [];
      // inclusive filters from checkboxes
      $checkboxes.each( function( i, elem ) {
        // if checkbox, use value if checked
        if ( elem.checked ) {
          inclusives.push( elem.value );
        }
      });

      // combine inclusive filters
      var filterValue = inclusives.length ? inclusives.join(', ') : '*';

      $output.text( filterValue );
      $('#test-locations').isotope({ filter: filterValue })
    });
    
    if( $(window).width() < 767 ) {
      $('.accordion-content').hide().removeClass("invisible");
    }

    $('#test-locations').isotope('layout');

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
