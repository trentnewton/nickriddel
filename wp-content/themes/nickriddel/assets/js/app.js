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
/*  Viewport Units
/*----------------------------------------------------*/

new vUnit({
  CSSMap: {
    // The selector (VUnit will create rules ranging from .selector1 to .selector100)
    '.vh_height': {
      // The CSS property (any CSS property that accepts px as units)
      property: 'height',
      // What to base the value on (vh, vw, vmin or vmax)
      reference: 'vh'
    }
  },
}).init(); // call the public init() method

/*----------------------------------------------------*/
/*	Page Animations
/*----------------------------------------------------*/

$('.fade-in-down').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.fade-in-up').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.fade-in-left').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.fade-in-right').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInRight', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.birds-load').addClass("hidden").viewportChecker({
    classToAdd: 'visible fly', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.scroll-flash').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated flash', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.product-display h2').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.product-display .short_description').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.woocommerce-bank-details p').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.woocommerce-bank-details h2').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.woocommerce-bank-details h3').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});

$('.woocommerce-bank-details ul').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible,
    classToRemove: 'hidden', // Class to remove before adding 'classToAdd' to the elements
    offset: 100, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
});