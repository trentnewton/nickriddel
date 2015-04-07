// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

/*----------------------------------------------------*/
/*  Disable buttons
/*----------------------------------------------------*/

$('.disabled').click(function(){
  return false;
});

/*----------------------------------------------------*/
/*  Hide page while loading
/*----------------------------------------------------*/

$(window).load(function(){
    $('#loading').fadeOut(1000);
    $('.content').fadeIn(1000);
});

/*----------------------------------------------------*/
/*	Page Animations
/*----------------------------------------------------*/

 
 jQuery(document).ready(function() {
    jQuery('.fade-in-down').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    });
    jQuery('.product-display h2').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    });
    jQuery('.product-display .short_description').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    });
    jQuery('.woocommerce-bank-details p').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    });
    jQuery('.fade-in-up').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    });
    jQuery('.fade-in-left').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });
    jQuery('.woocommerce-bank-details h2').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });
    jQuery('.woocommerce-bank-details h3').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });
    jQuery('.woocommerce-bank-details ul').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });
    jQuery('.fade-in-right').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight',
        offset: 100
    });
    jQuery('.scroll-flash').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated flash',
        offset: 100
    });
    jQuery('.birds-load').addClass("hidden").viewportChecker({
        classToAdd: 'visible fly',
        offset: 100
    });
});