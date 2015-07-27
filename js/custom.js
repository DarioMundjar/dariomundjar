	function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 3000);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}
 var mainApp = {
	       
	        vedio_fun:function()
	        {
	            $(function () {
	                $(".player").mb_YTPlayer();
	            });
	        },

	       

	    }
onReady(function () {
    show('page', true);
    show('loading', false);
    wow = new WOW(
	 {
	
		}	) 
		.init();
	mainApp.vedio_fun();

    $('#slickQuiz').slickQuiz();
        // options

});