$(document).ready(function () {

    $(".player").mb_YTPlayer();
    $('.gallery-item').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
        $('.gallery-item2').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
    $('.popup1').magnificPopup({ 

	 	items: {
	     src: 'https://www.youtube.com/watch?v=N-bBfTbJNFU'
     },
  type: 'iframe',
  iframe: {
	    	
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 


     }
     

    });
    $('.popup2').magnificPopup({  
	 	items: {
	     src: 'https://www.youtube.com/watch?v=cgb25lUXgY0'
     },
  type: 'iframe',
  iframe: {
	    	markup: 
	    			'<div class="mfp-iframe-scaler">'+			    			        
            		'<div class="mfp-close"></div>'+
            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen ></iframe>'+
            		'</div>', 
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 

     }

    });
    $('.popup3').magnificPopup({  
	 	items: {
	     src: 'https://www.youtube.com/watch?v=SWELdS1fG_E'
     },
  type: 'iframe',
  iframe: {
	    	markup: '<div class="mfp-iframe-scaler">'+
            		'<div class="mfp-close"></div>'+
            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            		'</div>', 
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 
     }

    });
    $('.popup4').magnificPopup({  
	 	items: {
	     src: 'https://www.youtube.com/watch?v=YHFp_FYuI4A'
     },
  type: 'iframe',
  iframe: {
	    	markup: '<div class="mfp-iframe-scaler">'+
            		'<div class="mfp-close"></div>'+
            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            		'</div>', 
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 
     }

    });
        $('.popup5').magnificPopup({  
	 	items: {
	     src: 'https://www.youtube.com/watch?v=qjH7LgRH2pE'
     },
  type: 'iframe',
  iframe: {
	    	markup: '<div class="mfp-iframe-scaler">'+
            		'<div class="mfp-close"></div>'+
            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            		'</div>', 
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 
     }

    });
            $('.popup6').magnificPopup({  
	 	items: {
	     src: 'https://www.youtube.com/watch?v=6v2L2UGZJAM'
     },
  type: 'iframe',
  iframe: {
	    	markup: '<div class="mfp-iframe-scaler">'+
            		'<div class="mfp-close"></div>'+
            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            		'</div>', 
        patterns: {
            youtube: {
	              index: 'youtube.com/', 
	              id: 'v=', 
	              src: '//www.youtube.com/embed/%id%?autoplay=1&color=white' 
            }
		     },
		     srcAction: 'iframe_src', 
     }

    });

    $('.parallax').parallax();
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

    $(function() {
    $("img.lazy").lazyload({
    	
    });
});
    	
    
});