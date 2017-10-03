// Portfolio Isotope Filter
jQuery(document).ready( function($) {

$(window).resize(function () {
        $container
          .isotope('reLayout');
        return false;
       
        });

setTimeout(function() {
         $container
          .isotope('reLayout');
           // alert(jQuery);
            return false;
    }, 1000);

  var $container = $('.isotope-container');
  var $products = $($container).isotope({
        // options
       
         animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
        itemSelector: '.product',
        layoutMode: 'masonry',
        // getSortData: {
        //     name: "a .caption"
        // }
       
        filter: '*'
    });


 



    // layout Isotope again after all images have loaded
    $products.imagesLoaded( function() {
        $products.isotope('layout');
    });



  var $checkboxes = $('.filter-list input');
    $checkboxes.change(function () {
        var filters = [];
        // Get the values of the checked checkboxes.
        // Place the values in the filters array.
        $checkboxes.filter(':checked').each(function () {
            filters.push(this.value);
        });
        // Concatenate the values from the filters array into a single string.
        var filterValue = filters.join('');
        $container.isotope({ 
            filter: filterValue,  
            animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                } 
            }, function noResultsCheck() {
    var numItems = $('.product:not(.isotope-hidden)').length;
        if (numItems == 0) {
        $('#noresults').removeClass('invisible');
    }
    else{
         $('#noresults').addClass('invisible');
    }
}
            );
        console.log(filterValue);
    });


  // Add the .checked class to list items holding a checked checkbox.
    $('.filter-list input:checkbox').click(function () {
        $('.filter-list li:has(input:checkbox:checked)').addClass('checked');
        $('.filter-list li:has(input:checkbox:not(:checked))').removeClass('checked');
    });

    //Remove the checkbox and checked class from the mutually excusive items

        $('.filter-list #production:checkbox').click(function () {
            $('.filter-list #uplink').attr('checked', false); // Unchecks it
            $('.filter-list #uplink:checkbox').parent().removeClass('checked');
    }); 
         $('.filter-list #uplink:checkbox').click(function () {
            $('.filter-list #production').attr('checked', false); // Unchecks it
            $('.filter-list #production:checkbox').parent().removeClass('checked');
    }); 
         $('#clearfilters').on('click', function() {
            console.log('hey hey');

  $('.filter-list input:checkbox:checked').removeAttr('checked');
        $container.isotope({ filter: '*' });
        $('.filter-list li:has(input:checkbox:not(:checked))').removeClass('checked');
         $('#noresults').addClass('invisible');

     
               

   }); 

 

    });



 