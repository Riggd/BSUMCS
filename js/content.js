$(document).ready (function () {
    //Hide all the elements in the DOM that have a class of "box"
    $('.box').hide();
    $('.box2').hide();

    // Make sure all the elements with a class of "clickme" are visible and bound
    // with a click event to toggle the "box" state
    $('.clickme').each(function() {
        $(this).show(0).on('click', function(e) {
            // This is only needed if your using an anchor to target the "box" elements
            e.preventDefault();
            
            // Find the next "box" element in the DOM
            $(this).next('.box').slideToggle('fast', function() {
                $(this).prev().html($(this).is(':visible') ? 'Hide Roster' : 'Show 2014 Roster');
            });
            
            $(this).next('.box2').slideToggle('fast', function() {
                $(this).prev().html($(this).is(':visible') ? 'Hide Schedule' : 'Show 2014 Schedule');
            });
        });
        
        // Check if data-box was bound to the button, if it was trigger the click event
        // for the button
        if ($(this).data('box-show')) {
            $(this).trigger('click');
        }
    });

});
