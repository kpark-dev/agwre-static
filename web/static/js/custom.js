var filterFns = {
    filterHouseSize: function() {

        var series_found = false;
        var features_found = false;

        var series_active = [];
        $('.searchFilter button.active').each(function(){
            if($(this).val()!='')
                series_active.push('.'+$(this).val());
        });


        var features_active = [];
        $('.searchFilter2 button.active').each(function(){
            features_active.push('.'+$(this).val());
        });

        var classes = $(this).attr('class').split(/\s+/);

        console.log(classes);
        console.log(series_active);
        console.log(features_active);

        if(series_active.length > 0) {
            $('.allpodTypeFilter').removeClass('active');
        }

        if(series_active.length == 0) {
            $('.allpodTypeFilter').addClass('active');
        }

        if(series_active.length == 3) {
            $('.allpodTypeFilter').addClass('active');

            $('.otherPodTypeFilter').removeClass('active');
        }

        if(series_active.length == 0)
            series_found = true;
        if(features_active.length == 0)
            features_found = true;

        for (var i = 0; i < classes.length; i++) {
            if (series_active.includes('.' + classes[i])) {
                series_found = true;
            }
            if (features_active.includes('.' + classes[i])) {
                features_found = true;
            }
        }


        //Check each item classes
        //Price
        var valid_size = false; // Initialize valid_size

        var actual_size = $(this).attr('data-value');
        actual_size = parseInt(actual_size);
        var range = $('#slider-block-width-range').slider('values');

        if (actual_size >= range[0] && actual_size <= range[1]) {
            valid_size = true;
        }

        console.log(range);

        return valid_size && series_found && features_found;
    }
};

$(document).ready(function (e) {

    $('.reset-page').on('click', function (e){
        // Reload the page
        location.reload();
    })

    var slider = $('#slider-block-width-range');
    var ranges = slider.data('ranges'); // Get the range values from the data attribute

    // Initialize the slider
    slider.slider({
        range: true,
        min: ranges[0], // Minimum value from the range
        max: ranges[1], // Maximum value from the range
        values: [ranges[0], ranges[1]], // Initial values
        slide: function(event, ui) {
            $container.isotope({ filter: filterFns.filterHouseSize },hideShowItems());
        }
    });


    //if ($('.filterTrigger ').length > 0)
     //   $('.filterTrigger ').first().click();

    // Initialize Isotope
    var $container = $('.isotope-container').isotope({
        itemSelector: '.item-isotope'
    });

    $container.isotope({ filter: filterFns.filterHouseSize },hideShowItems());


    // Listen for click events on buttons
    $('.searchFilter button, .searchFilter2 button').click(function(){
        if($(this).val() != '')
            $(this).toggleClass('active'); // Toggle 'active' class on button click

        $container.isotope({ filter: filterFns.filterHouseSize },hideShowItems());
    });


    function hideShowItems()
    {
        setTimeout(function (e){
            $('.pod-list-item').addClass('hidden');

            $('.item-isotope').each(function(){
                var itemId = $(this).data('id'); // Get the data-id attribute value

                // Check if the element is visible
                var displayValue = $(this).is(':visible');

                // Do something based on visibility
                if (displayValue) {
                    //$('.your-element').removeClass('hidden').fadeIn('slow');
                    $('.dest-'+itemId).removeClass('hidden').fadeIn('slow');
                }
            });

            if($('.pod-list-item:visible').length == 0)
                $('.no-result-found').show();
            else
                $('.no-result-found').hide();

        },500)

    }

});