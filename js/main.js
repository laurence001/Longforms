var $ = jQuery.noConflict();

//Loader
	 $(window).on('load', function () {
		$(".page_loader").fadeOut('fast');
		$('body.article').css('overflow-y', 'visible');
	});

$(document).ready(function() {

//Barre de progression
	$(window).scroll(function() {
		var h = $(document).height(); 
		var s = $(window).scrollTop(); 
		var w = $(window).height();  
		var t = (s / h) * w;
		var p = Math.ceil((s + t) / h * 110) + 1; $('#barre').width(p + '%');});

//Activation des JS de Bootstrap		
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();	
	
	$(function(){
		$('.carousel').carousel({
			 interval: 5000
		});
	});
	
	$("body").scrollspy({
		target: "#scroll",
		offset: 70
	});
		
		$('[data-spy="scroll"]').each(function(){
			var $spy = $(this).scrollspy('refresh');
		}); 
		
//Activation du menu via le bouton hamburger
	
	$('.ion-navicon-round').click(function() {
		$('#top-menu').slideToggle();
		$('.ion-navicon-round').toggleClass('turn');
			
			if ( $(window).width() < 500 ) {
				$('#scroll').toggleClass('hide');
			}
	});
	
	
//Réglages pour les médias	
	var v = $('[src^="https://www.youtube.com/embed/"]');
    v.wrap("<div class='video-container'/>");

    var w = $('[src^="https://player.vimeo.com"]');
    w.wrap("<div class='video-container'/>");
	
	var a=$('audio');
	a.wrap("<div class='audio'/>");
	
//Retour en haut de page (up to top)

	$(window).scroll(function(){
			if ($(this).scrollTop() > 240) {
				
				if ( $(window).width() > 1200 ) {
					$('#up').fadeIn(1800);
				}
				$('.article .brand').removeClass('animated');
				$('.article .brand').removeClass('bounceIn');
				$('.article .brand').addClass('logosmall');
				$('.article .brand').addClass('animated');
				$('.article .brand').addClass('bounceIn');
				
				if ( $(window).width() > 769 ) { 
				
					$('#titretop').slideDown();
				
				} 
				else { 
				
					$('#titretop').hide();
				}

			} else {
				$('#up').fadeOut(800);
				$('#titretop').slideUp();
				$('.article .brand').removeClass('logosmall');
				$('.article .brand').removeClass('animated');
				$('.article .brand').removeClass('bounceIn');
				$('.article .brand').addClass('animated');
				$('.article .brand').addClass('bounceIn');
			}
	});
	

	$('#up').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

//Scroll to pour la navigation intrapage

	$('.scrollTo').click( function() { 
		var page = jQuery(this).attr('href'); 
		var speed = 750; 
		jQuery('html, body').animate( { scrollTop: jQuery(page).offset().top }, speed ); // Go
			return false;
	});

//Footer calé en pied de page
	var docHeight = $(window).height();
	var footerHeight = $('#footer').height();
	var footerTop = $('#footer').position().top + footerHeight;

	   if (footerTop < docHeight) {
		$('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
	   }
});

/*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * Copyright 2014-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

// See the Getting Started docs for more information:
// http://getbootstrap.com/getting-started/#support-ie10-width

(function () {
  'use strict';
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    );
    document.querySelector('head').appendChild(msViewportStyle);
  }
})();