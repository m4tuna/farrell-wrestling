jQuery(document).ready(function() {

  console.log("initialize carousel");

  jQuery(".owl").owlCarousel({

    autoPlay: true,
    nav : true, // Show next and prev buttons
    smartSpeed : 300,
    dots : true,
    loop : true,
    dotsSpeed : 400,
    items:1

  });


});
