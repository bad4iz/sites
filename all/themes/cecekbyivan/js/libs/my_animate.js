
win_h = $(window).height();
jQuery(document).ready(function() {


    jQuery('.post').addClass("hidden_animate").viewportChecker({
        classToAdd: 'visible_animate animated pulse', // Class to add to the elements when they are visible
        offset: 300
    });

    // jQuery('#workers').addClass("hidden_animate").viewportChecker({
    //     classToAdd: 'visible_animate animated fadeInRight', // Class to add to the elements when they are visible
    //     offset: 300
    // });

    jQuery('.advantages').addClass("hidden_animate").viewportChecker({
        classToAdd: 'visible_animate animated flipInX', // Class to add to the elements when they are visible
        offset: 100
    });
    jQuery('.microphone').viewportChecker({
        classToAdd: 'visible_animate animated bounceIn', // Class to add to the elements when they are visible
        offset: win_h/2
    });
    jQuery('.Right').addClass("hidden_animate").viewportChecker({
        classToAdd: 'visible_animate animated rotateInDownLeft', // Class to add to the elements when they are visible
        offset: 300
    });
});
/**
 * Created by User on 16.08.2016.
 */
