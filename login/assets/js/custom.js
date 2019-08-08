

$(function($){

		//$("#mu-window").hide();
		function fadee(){
			$('#mu-reg').fadeIn();
			$("input").val("");
			
            };
		function fadelog(){
					$('#mu-login').fadeIn();
					//$("input").val("");  
		};
		function oout(r){
					//alert("aaaaaaaa");
					 $('#mu'+r).fadeOut();
					 
					 
		};
		



  /* ----------------------------------------------------------- */
  /*  1. SEARCH FORM
  /* ----------------------------------------------------------- */

   $('#mu-search-icon').on('click', function(event) {
        event.preventDefault();
        $('#mu-search').addClass('mu-search-open');
        $('#mu-search form input[type="search"]').focus();
    });
    
    /* $('.mu-search-close').on('click', function(event) {
		
      $("#mu-search").removeClass('mu-search-open');
    }); */
	

   
    
    $('.mu-reg-close').on('click', function() {
		 
		g="-reg";
		oout(g);
		$(".ff1").html("");
     
    });
	
	$('.mu-search-close').on('click', function() {
		g="-login";
		oout(g);
		$(".ff1").html("");
     
    });
	
	
	 $('#mu-login-icon').on('click', function() {
       
		//alert("hhhhhhhh");
		fadelog();
      // $('#pay2').fadeIn();
		}); 
		
		 $('#mu-reg-icon').on('click', function() {
       $(".ff1").html("");
		//alert("hhhhhhhh");
		fadee();
      // $('#pay2').fadeIn();
		
		

	

	}); 
	
	$('.mu-reg').on('click', function(event) {
        event.preventDefault();
        $('#mu-window').animate({right:'-3px',
		opacity:'1'}, 500);
		 

	});
	
	$('#winclose').on('click', function(event) {
        event.preventDefault();
        $('#mu-window').animate({right:'-300px',
		opacity:'0'}, 500);
		 

	});
	//----------------WEbex__________-
	
	
	/* $(window).scroll(function(){
      if ($(this).scrollTop() > 300) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });
	 */
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//-----------WEbex__________-
	
    
    $('.mu-search-close').on('click', function(event) {
      $("#mu-reg").removeClass('mu-search-open');
    });
	function das(){
		var email2 = $( "#log-email" ).val();
	var password2 = $( "#log-pass" ).val();
	$.post("log-user.php",{email:email2, passwor:password2 }, function(arg){
		$("#status").html(arg);
	})
	}
	function das1(){
		var email2 = $( "#log-email" ).val();
	var password2 = $( "#log-pass" ).val();
	$.post("log-user1.php",{email:email2, passwor:password2 }, function(arg){
		$("#status").html(arg);
	})
	}
	
	
	/* $('#mu-login-icon').on('keydown', function(event) {
  if (event.keyCode == 13) {
    console.log('Enter was pressed');
	das();
		
  
}

	}) 
	
	
$('.havelum').mouseover(function(){
	console.log("fhgfjhgf")	
	var id=$('this').attr('id');
	showhelp(id);
	//$(".help").fadeIn()
})
$('.havelum').mouseleave(function(){
	$(".help").fadeOut()
})

*/
	$('.hblog').click(function(event){
		event.preventDefault();
		das();
		
	})
	$('.hblog1').click(function(event){
		event.preventDefault();
		das1();
		
	})
	
//var request2;

	
  /*	document.getElementById('btnhb').addEventListener("keypress", function(e){

		if (e.keyCode === 13 ) {
			alert("aaaaaaaa");
			$(".hblog").click();
		    
	}} );
	//alert('aa');
   request2 = $.ajax({
        url: "log-user.php",
        type: "post",
        data: {email: email2, password: password2 },
    });
    request2.done(function (response, textStatus, jqXHR){
    	var reg2 = response;
    	if(reg2 == 'ok') {  window.location.href = "index.php";
		$('#mu-login').removeClass('mu-search-open');
			
		}
    	if(reg2 == 'tel') { window.location.href = "/tel.php";}
    	if(reg2 == 'error') { 
			$("#log-email").css("border", "2px solid darkred");    
			$("#log-pass").css("border", "2px solid darkred");	
		
    	}
        console.log(response);
		
		//$('#mu-login').removeClass('mu-search-open');
    });
	
	
    request2.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    }); */




	
/* ----------------------------------------------------------- */
/*  2. ABOUT US VIDEO
/* ----------------------------------------------------------- */
    // WHEN CLICK PLAY BUTTON 
    $('#mu-abtus-video').on('click', function(event) {
      event.preventDefault();
      $('body').append("<div id='about-video-popup'><span id='mu-video-close' class='fa fa-close'></span><iframe id='mutube-video' name='mutube-video' frameborder='0' allowfullscreen></iframe></div>");        
      $("#mutube-video").attr("src", $(this).attr("href"));
    });         
    // WHEN CLICK CLOSE BUTTON
    $(document).on('click','#mu-video-close', function(event) {     
      $(this).parent("div").fadeOut(1000);
    });
    // WHEN CLICK OVERLAY BACKGROUND
    $(document).on('click','#about-video-popup', function(event) {
      $(this).remove();
    });
  //===============================================
  
   $('.mu-abtus-videw').on('click', function(event) {
      event.preventDefault();
      $('body').append("<div id='about-video-popup'><span id='mu-video-close' class='fa fa-close'></span><iframe class='mutube-videw' name='mutube-video' frameborder='0' allowfullscreen></iframe></div>");        
      $(".mutube-videw").attr("src", $(this).attr("href"));
    }); 
//+================
  

	
    // WHEN CLICK CLOSE BUTTON
    $(document).on('click','#mu-video-close', function(event) {     
      $(this).parent("div").fadeOut(1000);
    });
    // WHEN CLICK OVERLAY BACKGROUND
    $(document).on('click','#about-video-popup', function(event) {
      $(this).remove();
    });
  
  
  /* ----------------------------------------------------------- */
  /*  3. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    $('#mu-slider').slick({
      dots: false,
      infinite: true,
      arrows: true,
      speed: 500,     
      autoplay: true,      
      cssEase: 'linear'
    });

  /* ----------------------------------------------------------- */
  /*  4. ABOUT US (SLICK SLIDER)
  /* ----------------------------------------------------------- */      

    $('#mu-testimonial-slide').slick({
      dots: true,
      infinite: true,
      arrows: false,
      speed: 500,
      autoplay: true,          
      cssEase: 'linear'
    });
  

  /* ----------------------------------------------------------- */
  /*  5. LATEST COURSE SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

   $('#mu-latest-course-slide').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 2500,
      responsive: [

	  {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
          }
        },
		{
          breakpoint: 800,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

  /* ----------------------------------------------------------- */
  /*  6. TESTIMONIAL SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    $('.mu-testimonial-slider').slick({
      dots: true,      
      infinite: true,
      arrows: false,
      autoplay: true,
      speed: 500,      
      cssEase: 'linear'
    });       

  /* ----------------------------------------------------------- */
  /*  7. COUNTER
  /* ----------------------------------------------------------- */

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


  /* ----------------------------------------------------------- */
  /*  8. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

  $('#mu-related-item-slide').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

	/* ----------------------------------------------------------- */
	/*  9. LIGHTBOX ( FOR PORTFOLIO POPUP VIEW ) 
	/* ----------------------------------------------------------- */ 
	
	$('body').append("<div id='portfolio-popup'><div class='portfolio-popup-area'><div class='portfolio-popup-inner'></div></div></div>");
	
	// WHEN CLICK PLAY BUTTON 
	
	$('.mu-view-btn').on('click', function(event) {
	  event.preventDefault();
	  $('#portfolio-popup').addClass("portfolio-popup-show");
	  $('#portfolio-popup').animate({
	      "opacity": 1
	  },500);   
	  var portfolio_detailscontent = $(this).parent(".mu-single-gallery-info-inner").find(".portfolio-detail").html();
	  $(".portfolio-popup-inner").html(portfolio_detailscontent);     
	
	
	})
	
	
	       
	       
	// WHEN CLICK CLOSE BUTTON
	
	$(document).on('click','.modal-close-btn', function(event) {     
	    event.preventDefault();
		$('#portfolio-popup').removeClass("portfolio-popup-show");
		$('#portfolio-popup').animate({
		      "opacity": 0
	    },500);  
	
	});
  
  /* ----------------------------------------------------------- */
  /*  10. HOVER DROPDOWN MENU
  /* ----------------------------------------------------------- */ 
  
  // for hover dropdown menu
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    
  /* ----------------------------------------------------------- */
  /*  11. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

    $(window).scroll(function(){
      if ($(this).scrollTop() > 300) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });
     
    //Click event to scroll to top

    $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });  
	
  //$('.choose_sit').on('click', function() {
	//	alert (this.id)
		
	//	$.post("setsess.php",{st:this.id }, function(arg){
	//	$("#mu-login").html(arg);
//	})
      //$("#mu-reg").removeClass('mu-search-open');
  //  });

});

