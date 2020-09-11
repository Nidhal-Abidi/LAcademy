 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });

jQuery(document).ready(function($) {

	"use strict";



	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {

			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);

        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();

    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		})

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	};
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();



	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 0,
		    autoplay: true,
		    nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 0,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 3
	        },
	        1200:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 4
	        }
		    }
			});
		}


		if ( $('.nonloop-block-14').length > 0 ) {
			$('.nonloop-block-14').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 0,
		    autoplay: true,
		    dots: false,
		    nav: false,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 20,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 30,
	        	stagePadding: 20,
	        	nav: true,
	          items: 2
	        },
	        1200:{
	        	margin: 30,
	        	stagePadding: 20,
	        	nav: true,
	          items: 3
	        }
		    }
			});

			$('.customNextBtn').click(function() {
			  $('.nonloop-block-14').trigger('next.owl.carousel');
			})
			$('.customPrevBtn').click(function() {
			  $('.nonloop-block-14').trigger('prev.owl.carousel');
			})
		}



		$('.slide-one-item').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
	    smartSpeed: 900,
	    autoplayTimeout: 7000,
			stagePadding: 0,
	    margin: 0,
	    autoplay: true,
	    nav: true,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
	  });

		$('.slide-one-item').on('translated.owl.carousel', function(event) {
			console.log('translated');
			$('.owl-item.active').find('.js-slide-text').addClass('active');
		});
		$('.slide-one-item').on('translate.owl.carousel', function(event) {
			console.log('translate');
			$('.owl-item.active').find('.js-slide-text').removeClass('active');
		});

		$('.owl-item.active').find('.js-slide-text').addClass('active');


	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
	    responsive: false,
	    parallaxBackgrounds: true,
	    parallaxElements: true,
	    horizontalScrolling: false,
	    hideDistantElements: false,
	    scrollProperty: 'scroll'
	  });
	};
	siteStellar();

	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
		  var $this = $(this).html(event.strftime(''
		    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
		    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
		    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
		    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
		    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});

	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.site-menu-toggle');
   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
      e.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        'scrollTop': $(hash).offset().top
      }, 600, 'easeInOutCirc', function(){
        window.location.hash = hash;
      });

    });
  };
  OnePageNavigation();

  var siteScroll = function() {



  	$(window).scroll(function() {

  		var st = $(this).scrollTop();

  		if (st > 100) {
  			$('.js-sticky-header').addClass('shrink');
  		} else {
  			$('.js-sticky-header').removeClass('shrink');
  		}

  	})

  };
  siteScroll();

});



const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

const mail_signin=document.getElementById('mailsignin');
const pwd_signin=document.getElementById('pwdsignin');
const form_signin=document.getElementById('signin_form');
const error_signin_mail=document.getElementById('error_signin_mail');
const error_signin_pwd=document.getElementById('error_signin_pwd');

signin_form.addEventListener('submit',function(e){
    if (!(mail_signin.value==='' || mail_signin.value==null)){
      error_signin_mail.innerHTML="E-mail inputted!";
      error_signin_mail.style.color = "green";
      error_signin_mail.style.fontSize = "small";
    }
    if (!(pwd_signin.value==='' || pwd_signin.value==null)){
      error_signin_pwd.innerHTML="Password inputted!";
      error_signin_pwd.style.color = "green";
      error_signin_pwd.style.fontSize = "small";
    }

    if (mail_signin.value==='' || mail_signin.value==null){
      e.preventDefault();
      error_signin_mail.innerHTML="You have to input an e-mail!";
      error_signin_mail.style.color = "#ff0000";
      error_signin_mail.style.fontSize = "small";
    }
    else if (pwd_signin.value==='' || pwd_signin.value==null){
      e.preventDefault();
      error_signin_pwd.innerHTML="You have to input a password!";
      error_signin_pwd.style.color = "#ff0000";
      error_signin_pwd.style.fontSize = "small";
    }

});

const signup_form=document.getElementById('signup_form');

const name_signup=document.getElementById('name_signup');
const mail_signup=document.getElementById('mail_signup');
const pwd1_signup=document.getElementById('pwd1_signup');
const pwd2_signup=document.getElementById('pwd2_signup');

const error_signup_name=document.getElementById('error_signup_name');
const error_signup_email=document.getElementById('error_signup_email');
const error_signup_pwd1=document.getElementById('error_signup_pwd1');
const error_signup_pwd2=document.getElementById('error_signup_pwd2');

signup_form.addEventListener('submit',function(e){
    if (!(name_signup.value==='' || name_signup.value==null)){
      error_signup_name.innerHTML="Name inputted!";
      error_signup_name.style.color = "green";
      error_signup_name.style.fontSize = "small";
    }
    if (!(mail_signup.value==='' || mail_signup.value==null)){
      error_signup_email.innerHTML="E-mail inputted!";
      error_signup_email.style.color = "green";
      error_signup_email.style.fontSize = "small";
    }
    if (!(pwd1_signup.value==='' || pwd1_signup.value==null)){
      error_signup_pwd1.innerHTML="Password inputted!";
      error_signup_pwd1.style.color = "green";
      error_signup_pwd1.style.fontSize = "small";
    }
    if (!(pwd2_signup.value==='' || pwd2_signup.value==null)){
      error_signup_pwd2.innerHTML="Password inputted!";
      error_signup_pwd2.style.color = "green";
      error_signup_pwd2.style.fontSize = "small";
    }

    if (name_signup.value==='' || name_signup.value==null){
      e.preventDefault();
      error_signup_name.innerHTML="You have to input a name!";
      error_signup_name.style.color = "#ff0000";
      error_signup_name.style.fontSize = "small";
    }
    else if (mail_signup.value==='' || mail_signup.value==null){
      e.preventDefault();
      error_signup_email.innerHTML="You have to input an email!";
      error_signup_email.style.color = "#ff0000";
      error_signup_email.style.fontSize = "small";
    }
    else if (pwd1_signup.value==='' || pwd1_signup.value==null){
      e.preventDefault();
      error_signup_pwd1.innerHTML="You have to input a password!";
      error_signup_pwd1.style.color = "#ff0000";
      error_signup_pwd1.style.fontSize = "small";
    }
    else if (pwd2_signup.value==='' || pwd2_signup.value==null){
      e.preventDefault();
      error_signup_pwd2.innerHTML="You have to repeat the password!";
      error_signup_pwd2.style.color = "#ff0000";
      error_signup_pwd2.style.fontSize = "small";
    }
    else if (pwd1_signup.value !== pwd2_signup.value){
      e.preventDefault();
      error_signup_pwd2.innerHTML="Passwords don't match!";
      error_signup_pwd2.style.color = "#ff0000";
      error_signup_pwd2.style.fontSize = "small";
    }


});

const contact_form=document.getElementById('contact_form');

const contact_fullname=document.getElementById('contact_fullname');
const contact_subject=document.getElementById('contact_subject');
const contact_email=document.getElementById('contact_email');
const contact_message=document.getElementById('contact_message');

const error_contact_fullname=document.getElementById('error_contact_fullname');
const error_contact_subject=document.getElementById('error_contact_subject');
const error_contact_email=document.getElementById('error_contact_email');
const error_contact_message=document.getElementById('error_contact_message');

contact_form.addEventListener('submit',function(e){
  if (!(contact_fullname.value==='' || contact_fullname.value==null)){
    error_contact_fullname.innerHTML="Full Name inputted!";
    error_contact_fullname.style.color = "green";
    error_contact_fullname.style.fontSize = "small";
  }
  if (! (contact_subject.value==='' || contact_subject.value==null)){
    error_contact_subject.innerHTML="Subject inputted!";
    error_contact_subject.style.color = "green";
    error_contact_subject.style.fontSize = "small";
  }
  if (! (contact_email.value==='' || contact_email.value==null)){
    error_contact_email.innerHTML="E-mail inputted!";
    error_contact_email.style.color = "green";
    error_contact_email.style.fontSize = "small";
  }
  if (! (contact_message.value==='' || contact_message.value==null)){
    error_contact_message.innerHTML="Message inputted!";
    error_contact_message.style.color = "green";
    error_contact_message.style.fontSize = "small";
  }

  if (contact_fullname.value==='' || contact_fullname.value==null){
    e.preventDefault();
    error_contact_fullname.innerHTML="You have to input your full name!";
    error_contact_fullname.style.color = "#ff0000";
    error_contact_fullname.style.fontSize = "small";
  }
  else if (contact_subject.value==='' || contact_subject.value==null){
    e.preventDefault();
    error_contact_subject.innerHTML="You have to input the subject!";
    error_contact_subject.style.color = "#ff0000";
    error_contact_subject.style.fontSize = "small";
  }
  else if (contact_email.value==='' || contact_email.value==null){
    e.preventDefault();
    error_contact_email.innerHTML="You have to input an e-mail!";
    error_contact_email.style.color = "#ff0000";
    error_contact_email.style.fontSize = "small";
  }
  else if (contact_message.value==='' || contact_message.value==null){
    e.preventDefault();
    error_contact_message.innerHTML="You have to input your message!";
    error_contact_message.style.color = "#ff0000";
    error_contact_message.style.fontSize = "small";
  }



});
