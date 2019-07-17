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
      itemSelector: '.test-location',
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

    var $compare = $('.test-compare input');
    $compare.change( function() {
      // console.log("checked");
      $(this).parents('.test-location').toggleClass('compare');
      // if($(this).prop('checked')) {
      //   $(this).parents('.test-location').addClass('compare');
      // }
      // else {
      //   $(this).parents('.test-location').removeClass('compare');
      // }
    });

    var $mobile = $('.mobile-chk input');
    $mobile.change( function() {
      $(this).parents('.test-location').toggleClass('compare');
    })


    //Compare test layouts
    $('.compare-btn').click(function() {
      
      console.log($(this).text());
      if ($.trim($(this).text()) === 'COMPARE') {
        $(this).text('GO BACK');
        $('#test-locations').isotope({ filter: '.compare' });
        if( $(window).width() < 769 ) {
          $('.tests').addClass('border-t-2')
        }
      }
      else {
        $(this).text('COMPARE');
        var $checkboxes = $('#ui-inputs input');

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

        $(".test-compare input").prop("checked",false);
        $(".mobile-chk input").prop("checked",false);
        $(".test-location").removeClass('compare');
        $('.tests').removeClass('border-t-2');
        if( $(window).width() < 767 ) {
          $('.accordion-content').hide();
          $('.loc-down').hide();
          $('.loc-up').show();
        }
        $('#test-locations').isotope({ filter: filterValue })
              
      }

      $("#test-search").toggle();
      if( $(window).width() < 767 ) {
        $('.mobile-chk').toggle();
      }
      else {
        $(".test-compare").toggle();
      }
      
      
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
