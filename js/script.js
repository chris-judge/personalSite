$(document).ready(function(){

	//Variables
	var flag = false;

	//Sizing Articles to Viewport
		//$('#about').height($(window).height() - 95);
		//$('#home').height($(window).height() - 75);
		//$('#portfolio').height($(window).height() - 65);
		//$('#contact').height($(window).height() - 125);
	$('#about').css('min-height', $(window).height() - 95);
	$('#home').css('height', $(window).height() - 75);
	$('#portfolio').css('min-height', $(window).height() - 65);
	$('#contact').css('min-height', $(window).height() - 125);

	mobileNav();

	//Changing Resume Page Anchors
	if(window.location.href == "http://christopherjudge.us/resume.php" || window.location.href == "http://localhost/mySite/artPadLayout.php"){
		$('#homeAnchor').attr("href", "http://christopherjudge.us/");
		$('#aboutAnchor').attr("href", "http://christopherjudge.us/#about");
		$('#portfolioAnchor').attr("href", "http://christopherjudge.us/#portfolio");
		$('#contactAnchor').attr("href", "http://christopherjudge.us/#contact");
	} else {
		// http://css-tricks.com/snippets/jquery/smooth-scrolling/
		// by Chris Coyier
		$('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top - 75
		        }, 1000);
		        return false;
		      }
		    }
	  	});
	  	//End
	  }


	//Track Window Size
	$(window).resize(function(){
		$('#about').css('min-height', $(window).height() - 95);
		$('#home').css('height', $(window).height() - 75);
		$('#portfolio').css('min-height', $(window).height() - 65);
		$('#contact').css('min-height', $(window).height() - 125);
		mobileNav();
		myFunction();
	});

	//Lame function call 2
	myFunction();

	//Slide down and up when menu button is clicked
	$('#menuIcon').click(function(event){
		event.preventDefault();

		if(flag==false){
			$('header nav.mobile ul').slideToggle();
			$('nav').animate({height:'+=40'}, 375);
			flag = true;
		}else{
			$('header nav.mobile ul').slideUp();
			$('nav').animate({height:'-=40'}, 375);
			flag = false;

			return
		}
	});

	//Slide up when window is resized and menu is open
	$(window).resize(function(){
		if(flag==true){
			$('nav').animate({height:'-=40'}, 375);
			flag = false;
		}

	});

//Lame function
function myFunction(){
	if($(window).width() < 850 ){

		//Slide up when anchor is clicked
		$('header nav.mobile ul li a').click(function(){
			$('header nav.mobile ul').slideUp();
			$('nav').animate({height:'-=40'}, 375);
			flag = false;
		});
	}
}

//AJAX Submit
$("#contactForm").submit(function(){
    event.preventDefault();
    $(this).find("p.alert,p.success").fadeOut().remove();

    formData = $("#contactForm").serialize();
    form = $(this);

    $.ajax({
    	url: 'handler.php',
    	type: 'post',
    	data: formData,

    	success: function(data){
    		form.prepend("<p class='success'>" + data + "</p>");
    		$("p.success").fadeIn(200);
			form[0].reset();
    	},
    	error: function(jqXHR, textStatus, errorThrown){
    		form.prepend("<p class='alert'>" + jqXHR.responseText + "</p>");
			$("p.alert").fadeIn(200);
    	}

  });
});






//Ready End
});

//Mobile nav menu
function mobileNav(){
	breakpoint = 850;

	//Swap from desktop to mobile nav
	if ($(window).width() < breakpoint){
		$("nav").addClass("mobile").removeClass("full");
		$("nav ul").hide();
	} else {
		$("nav").addClass("full").removeClass("mobile");
		$("nav ul").show();
	}

	//Change Nav Icon Size
	if($(window).width() < 576){
		$('#dropDownIcon').removeClass("fa fa-bars fa-2x");
		$('#dropDownIcon').addClass("fa fa-bars fa-lg");

	} else {
		$('#dropDownIcon').removeClass("fa fa-bars fa-lg");
		$('#dropDownIcon').addClass("fa fa-bars fa-2x");
	}

	//Change Header Text
	if($(window).width() < 416){
		$('#navH1').html('Christopher Judge');
	} else {
		$('#navH1').html('Christopher Judge |')
	}
}