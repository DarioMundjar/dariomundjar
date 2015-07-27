$( document ).ready(function() {
	$('.popup1').magnificPopup({ 

	 	items: {
	     src: 'https://www.youtube.com/watch?v=YLm99Rr8CWs'
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
	     src: 'https://www.youtube.com/watch?v=vz4uABC4Huc'
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
	     src: 'https://www.youtube.com/watch?v=0U989j62g20'
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
	     src: 'https://www.youtube.com/watch?v=ozEvXEGm8Hk'
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
	     src: 'https://www.youtube.com/watch?v=KtBzcEgdifE'
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
	     src: 'https://www.youtube.com/watch?v=DPVk3_d76XE'
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
	
$( "#se1" ).click(function() {
$('#modal1').modal();
}),
$( "#se2" ).click(function() {
$('#modal2').modal();
}),
$( "#se3" ).click(function() {
$('#modal3').modal();
}),
$( "#se4" ).click(function() {
$('#modal4').modal();
}),
$( "#se5" ).click(function() {
$('#modal5').modal();
}),
$( "#se6" ).click(function() {
$('#modal6').modal();
}),
$( "#se7" ).click(function() {
$('#modal7').modal();
}),
$( "#se8" ).click(function() {
$('#modal8').modal();
});

});