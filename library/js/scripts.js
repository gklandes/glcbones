'use strict';
/* global jQuery */

(function ($) {

    /*
     * Get Viewport Dimensions
     * returns object with viewport dimensions to match css in width and height properties
     * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
    */
    function updateViewportDimensions() {
            var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
            return { width:x,height:y };
    }
    // setting the viewport width
    var viewport = updateViewportDimensions();


    /*
     * We're going to swap out the gravatars.
     */
    function loadGravatars() {
        // set the viewport using the function above
        viewport = updateViewportDimensions();
        // if the viewport is tablet or larger, we load in the gravatars
        if (viewport.width >= 768) {
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
            }
    } // end function


    /*
     * Put all your regular jQuery in here.
    */
    $(function() {

        loadGravatars();

    }); /* end of as page load scripts */

})(jQuery);
