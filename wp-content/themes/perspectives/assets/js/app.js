$(document).ready(function() {
	/* Same height */
  //$('.sidebar').height($('.synopsis').height());
  
  /* Responsive Menu */
  $('.menu-toggle').click(function() {
    $(this).toggleClass('is-open').toggleClass('is-closed');
	  $('.menu').toggleClass('active');
	  $('body').toggleClass('offset');
  });

  /* Film Modals on Landing */
  $('[data-film-id]').click(function(){
    $('.film').removeClass('active');
    $(this).addClass('active');
  	$('.avatar').removeClass('pop');
  	$(this).find('.avatar').addClass('pop');
  	var filmID = $(this).data('film-id');
  	$('.modal').removeClass('animated fadeIn');
  	$('.landing').find("[data-modal-id='" + filmID + "']").addClass('animated fadein');
	});
	
	$('.modal-close').click(function(){
		$('.avatar').removeClass('pop');
		$('.modal').fadeOut().removeClass('animated fadeIn').fadeIn();
	});
	
	/* Parallax */
	$("[data-parallax-speed]").each(function(){
    var $window = $(window);
    var $bg = $(this);
    var bgPos = $bg.offset().top;

    $(window).scroll(function() {
      var windowPos = $window.scrollTop();

      var distanceToTop = windowPos - bgPos;
      // Scroll the background at var speed
      var yPos = -(distanceToTop / $bg.data("parallax-speed") );

      var coords = "center " + yPos + "px";
      $bg.css( {backgroundPosition: coords, backgroundAttachment: "fixed"} );
    });
  });

  /* Data Animate */
  // Check whether the element is visible in the window
  function animateWhenVisible() {
    $("[data-animate]").each(function() {
      var $element = $(this);
      var topOfWindow = $(window).scrollTop();
      var threshold = $(window).height() - 350;
      var imagePos = $element.offset().top;

      if (imagePos < topOfWindow + threshold) {
        startAnimating($element);
      }
    });
  }
  // Start animating
  function startAnimating($element) {
    var animationData = $element.data("animate");
    var animation = {
      name: animationData.match(/\w+/),
      delay: animationData.match(/\d+/) || 0,
    };
    var addAnimateClass = function() {
      $element.addClass("animated " + animation.name);
    };
    setTimeout(addAnimateClass, animation.delay);
  }
  // Animate those that are visible on initial load
  animateWhenVisible();
  
  // Animate elements upon scrolling
  $(window).scroll(function() {
    animateWhenVisible();
  });
});