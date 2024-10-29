jQuery(document).ready(function($) {

	// mobile nav functionality
	$(function () {

		var navTrigger = $("#mobile-nav-trigger"),
			mainNav = $("#primary-navigation-wrapper"),
			speed = 150;

		navTrigger.on("click", function () {
			if ($(this).hasClass("open")) {
				$(this).removeClass("open");
				mainNav.stop().slideUp(speed);
			} else {
				$(this).addClass("open");
				mainNav.stop().slideDown(speed);
			}
		});

	});

	// show more signatures
	$(function () {

		var signatureButton = $('#show-more-signatures'),
			signatureWrap = $('#additional-signatures');

		signatureButton.on('click', function(evt) {
			evt.preventDefault();
			
			if(signatureWrap.is(':visible')) {
				signatureWrap.stop().slideUp(200);
				signatureButton.text('SEE MORE SIGNATURES');
			} else {
				signatureWrap.stop().slideDown(200);
				signatureButton.text('SHOW LESS');
			}
		});

	});

	$('#changing-link').click(function(event) {
		// On-page links
		if (
		  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		  && 
		  location.hostname == this.hostname
		) {
		  // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  // Does a scroll target exist?
		  if (target.length) {
		    // Only prevent default if animation is actually gonna happen
		    event.preventDefault();
		    $('html, body').animate({
		      scrollTop: target.offset().top
		    }, 1000, function() {
		      // Callback after animation
		      // Must change focus!
		      var $target = $(target);
		      $target.focus();
		      if ($target.is(":focus")) { // Checking if the target was focused
		        return false;
		      } else {
		        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		        $target.focus(); // Set focus again
		      };
		    });
		  }
		}
	});

	// start magic scroll stuff
	var controller = new ScrollMagic.Controller();

	var pageHeight = document.documentElement.clientHeight;
	var offsetHeight = pageHeight / 3;
	var offsetHeight2 = pageHeight / 8;
	var offsetHeight3 = pageHeight / 2;
	var offsetHeight4 = pageHeight / 1.2;
	console.log(pageHeight);

	// start scrollmagic scenes
	if( $('body').hasClass('page-template-template-manifesto') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".animate-1-control-wrap .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			/*
			var scene1_2tween = TweenMax.staggerTo(".manifesto-content-section-2 .animateColor", 0.5, {color: "#D1A129", ease: Power4.easeOut}, 0.2);

			var scene1_2 = new ScrollMagic.Scene({triggerElement: "#color-trigger-1", triggerHook: "onEnter", duration: 400, offset: offsetHeight2})
								.setTween(scene1_2tween)
								.addTo(controller);
			*/



			var scene2tween = TweenMax.staggerTo(".manifesto-content-section-3 .animateRise2", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-3", triggerHook: "onEnter", duration: 400, offset: offsetHeight})
								.setTween(scene2tween)
								.addTo(controller);



			var scene3tween = TweenMax.staggerTo(".manifesto-content-section-4 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-4", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

			var scene3_2tween = TweenMax.staggerTo(".manifesto-content-section-4 .animateColor", 0.5, {color: "#D1A129", ease: Power4.easeOut}, 0.2);

			var scene3_2 = new ScrollMagic.Scene({triggerElement: "#color-trigger-2", triggerHook: "onEnter", duration: 400, offset: offsetHeight2})
								.setTween(scene3_2tween)
								.addTo(controller);



			var scene4tween = TweenMax.staggerTo(".manifesto-content-section-5 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-5", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene4tween)
								.addTo(controller);

			var scene4_2tween = TweenMax.staggerTo(".manifesto-content-section-5 .animateColor", 0.5, {color: "#D1A129", ease: Power4.easeOut}, 0.2);

			var scene4_2 = new ScrollMagic.Scene({triggerElement: "#color-trigger-3", triggerHook: "onEnter", duration: 400, offset: 0})
								.setTween(scene4_2tween)
								.addTo(controller);

			var scene4_3tween = TweenMax.staggerTo(".manifesto-content-section-5 .animateOpacity", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4_3 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-5", triggerHook: "onEnter", duration: 800, offset: offsetHeight3})
								.setTween(scene4_3tween)
								.addTo(controller);



			var scene5tween = TweenMax.staggerTo(".manifesto-content-section-6 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene5 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-6", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene5tween)
								.addTo(controller);

			var scene5_2tween = TweenMax.staggerTo(".manifesto-content-section-6 .animateColor", 0.5, {color: "#D1A129", ease: Power4.easeOut}, 0.2);

			var scene5_2 = new ScrollMagic.Scene({triggerElement: "#color-trigger-4", triggerHook: "onEnter", duration: 400, offset: offsetHeight2})
								.setTween(scene5_2tween)
								.addTo(controller);



			var scene6tween = TweenMax.staggerTo(".manifesto-content-section-7 .animateSlideRight", 0.5, {transform: "translateX(0)", opacity: 1, ease: Power4.easeOut}, 0.4);

			var scene6 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-7", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene6tween)
								.addTo(controller);



			var scene7tween = TweenMax.staggerTo(".manifesto-content-section-8 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene7 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-8", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene7tween)
								.addTo(controller);



			var scene8tween = TweenMax.staggerTo(".manifesto-content-section-9 .animateSlideRight", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.4);

			var scene8 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-9", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene8tween)
								.addTo(controller);

			var scene8_2tween = TweenMax.staggerTo(".manifesto-content-section-9 .animateColor2", 0.5, {color: "#000000", ease: Power4.easeOut}, 0.2);

			var scene8_2 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-9", triggerHook: "onEnter", duration: 600, offset: offsetHeight})
								.setTween(scene8_2tween)
								.addTo(controller);



			var scene9tween = TweenMax.staggerTo(".manifesto-content-section-10 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene9 = new ScrollMagic.Scene({triggerElement: ".manifesto-content-section-10", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene9tween)
								.addTo(controller);



			var scene9tween = TweenMax.staggerTo(".manifesto-section-3 .animateOpacity", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene9 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-3", triggerHook: "onEnter", duration: 800, offset: offsetHeight3})
								.setTween(scene9tween)
								.addTo(controller);



			var scene10tween = TweenMax.staggerTo(".manifesto-section-3 .top-text .animateRise", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene10 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene10tween)
								.addTo(controller);

			var scene10_2tween = TweenMax.staggerTo(".manifesto-section-3 .animateColor3", 0.5, {color: "#FFF7E4", ease: Power4.easeOut}, 0.2);

			var scene10_2 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-3", triggerHook: "onEnter", duration: 600, offset: offsetHeight})
								.setTween(scene10_2tween)
								.addTo(controller);



			var scene11tween = TweenMax.staggerTo(".manifesto-section-3 .pillar-contain-wrap .animateRise", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene11 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-3 .pillar-contain-wrap", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene11tween)
								.addTo(controller);



			var scene12tween = TweenMax.staggerTo(".manifesto-section-3 .support-cols .animateRise", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene12 = new ScrollMagic.Scene({triggerElement: ".manifesto-section-3 .support-cols", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene12tween)
								.addTo(controller);



			var scene13tween = TweenMax.staggerTo("#sign-this-declaration .animateRise", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene13 = new ScrollMagic.Scene({triggerElement: "#sign-this-declaration", triggerHook: "onEnter", offset: offsetHeight4})
								.setTween(scene13tween)
								.addTo(controller);



			var scene14tween = TweenMax.staggerTo(".manifesto-signature-wrap .animateRise", 0.5, {opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene14 = new ScrollMagic.Scene({triggerElement: ".manifesto-signature-wrap", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene14tween)
								.addTo(controller);

		});

	}

	if( $('body').hasClass('page-template-template-home') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".home-section-1 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".home-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			var scene2tween = TweenMax.staggerTo(".home-section-2 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".home-section-2", triggerHook: "onEnter", offset: 0})
								.setTween(scene2tween)
								.addTo(controller);

			var scene3tween = TweenMax.staggerTo(".home-section-3 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".home-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

			var scene4tween = TweenMax.staggerTo(".home-section-4 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4 = new ScrollMagic.Scene({triggerElement: ".home-section-4", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene4tween)
								.addTo(controller);

			var scene5tween = TweenMax.staggerTo(".home-section-5 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene5 = new ScrollMagic.Scene({triggerElement: ".home-section-5", triggerHook: "onEnter", offset: offsetHeight3})
								.setTween(scene5tween)
								.addTo(controller);

			var scene6tween = TweenMax.staggerTo(".home-section-6 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene6 = new ScrollMagic.Scene({triggerElement: ".home-section-6", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene6tween)
								.addTo(controller);

			var scene7tween = TweenMax.staggerTo(".home-section-7 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene7 = new ScrollMagic.Scene({triggerElement: ".home-section-7", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene7tween)
								.addTo(controller);

			var scene8tween = TweenMax.staggerTo(".home-section-8 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene8 = new ScrollMagic.Scene({triggerElement: ".home-section-8", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene8tween)
								.addTo(controller);

		});

	}

	if( $('body').hasClass('page-template-template-about') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".about-animate-section-1 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".about-animate-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			var scene2tween = TweenMax.staggerTo(".about-animate-section-2 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".about-animate-section-2", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene2tween)
								.addTo(controller);

			var scene3tween = TweenMax.staggerTo(".about-animate-section-3 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".about-animate-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

			var scene4tween = TweenMax.staggerTo(".about-animate-section-4 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4 = new ScrollMagic.Scene({triggerElement: ".about-animate-section-4", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene4tween)
								.addTo(controller);

			var scene5tween = TweenMax.staggerTo(".about-animate-section-5 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene5 = new ScrollMagic.Scene({triggerElement: ".about-animate-section-5", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene5tween)
								.addTo(controller);

		});

	}

	if( $('body').hasClass('page-template-template-general') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".general-animate-section-1 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".general-animate-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			var scene2tween = TweenMax.staggerTo(".general-animate-section-2 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".general-animate-section-2", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene2tween)
								.addTo(controller);

			var scene3tween = TweenMax.staggerTo(".general-animate-section-3 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".general-animate-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

			var scene4tween = TweenMax.staggerTo(".general-animate-section-4 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4 = new ScrollMagic.Scene({triggerElement: ".general-animate-section-4", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene4tween)
								.addTo(controller);

			var scene5tween = TweenMax.staggerTo(".general-animate-section-5 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene5 = new ScrollMagic.Scene({triggerElement: ".general-animate-section-5", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene5tween)
								.addTo(controller);

		});

	}

	if( $('body').hasClass('page-template-template-partners') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".partners-animate-section-1 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".partners-animate-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			var scene2tween = TweenMax.staggerTo(".partners-animate-section-2 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".partners-animate-section-2", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene2tween)
								.addTo(controller);

			var scene3tween = TweenMax.staggerTo(".partners-animate-section-3 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".partners-animate-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

			var scene4tween = TweenMax.staggerTo(".partners-animate-section-4 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene4 = new ScrollMagic.Scene({triggerElement: ".partners-animate-section-4", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene4tween)
								.addTo(controller);

			var scene5tween = TweenMax.staggerTo(".partners-animate-section-5 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene5 = new ScrollMagic.Scene({triggerElement: ".partners-animate-section-5", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene5tween)
								.addTo(controller);

		});

	}

	if( $('body').hasClass('page-template-template-contact') ) {

		$(function() {

			var scene1tween = TweenMax.staggerTo(".contact-animate-section-1 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene1 = new ScrollMagic.Scene({triggerElement: ".contact-animate-section-1", triggerHook: "onEnter", offset: 0})
								.setTween(scene1tween)
								.addTo(controller);

			var scene2tween = TweenMax.staggerTo(".contact-animate-section-2 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene2 = new ScrollMagic.Scene({triggerElement: ".contact-animate-section-2", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene2tween)
								.addTo(controller);

			var scene3tween = TweenMax.staggerTo(".contact-animate-section-3 .animateRise", 0.5, {transform: "translateY(0)", opacity: 1, ease: Power4.easeOut}, 0.2);

			var scene3 = new ScrollMagic.Scene({triggerElement: ".contact-animate-section-3", triggerHook: "onEnter", offset: offsetHeight})
								.setTween(scene3tween)
								.addTo(controller);

		});

	}

	
	if( $('body').hasClass('page-template-template-donate') ) {

		$(function() {
			$("#once_button").click(function() {
				$("#give_monthly").removeClass("active");
				$("#give_once").addClass("active");
			
				// Add 'active' class to the clicked button and remove it from the other button
				$(this).addClass("active");
				$("#monthly_button").removeClass("active");
				});
			
				$("#monthly_button").click(function() {
				$("#give_once").removeClass("active");
				$("#give_monthly").addClass("active");
			
				// Add 'active' class to the clicked button and remove it from the other button
				$(this).addClass("active");
				$("#once_button").removeClass("active");
				$("#give_once").hide();
				});
			});
		}
	});