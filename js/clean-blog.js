// Floating label headings for the contact form
jQuery(function() {
    jQuery("body").on("input propertychange", ".floating-label-form-group", function(e) {
        jQuery(this).toggleClass("floating-label-form-group-with-value", !!jQuery(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        jQuery(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        jQuery(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if (jQuery(window).width() > MQL) {
        var headerHeight = jQuery('.navbar-custom').height();
        jQuery(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = jQuery(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && jQuery('.navbar-custom').hasClass('is-fixed')) {
                        jQuery('.navbar-custom').addClass('is-visible');
                    } else {
                        jQuery('.navbar-custom').removeClass('is-visible is-fixed');
                    }
                } else if (currentTop > this.previousTop) {
                    //if scrolling down...
                    jQuery('.navbar-custom').removeClass('is-visible');
                    if (currentTop > headerHeight && !jQuery('.navbar-custom').hasClass('is-fixed')) jQuery('.navbar-custom').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }
});
