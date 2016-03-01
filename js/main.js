// init Isotope
var $container = $('.projects').isotope('layout');

$('.project-filter').on( 'click', 'a', function(e) {
  e.preventDefault();
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });

$('.project-filter li').removeClass('active');
$(this).closest('li').addClass('active');

});

//scroll animation

$(document)

