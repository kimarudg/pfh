$( document ).ready(function() {
	$( ".partner" ).add( ).css("position","relative");
	
	$("#coach-applications-list-form .form-submit").addClass("btn btn-default login-btn");
	
	//$("#coach-applications-list-form").wrap("<div class='col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 col-xs-12'></div>");
	
	//coach applications table
	$("#coach-applications-list-form").wrap("<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>");
	
	//post resource form
	$("#resources-node-form").wrap("<div class='col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-xs-12'></div>");
	
	//questions page
	//$(".page-questions .article-content").wrap("<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>");
	
	//users page wrapping
	$(".page-user .article-content").wrap("<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>");
	
	//style buttons for post resource form
	$("#resources-node-form #edit-submit").addClass("btn btn-default resource-btn");
	$("#resources-node-form #edit-preview").addClass("btn btn-default resource-btn");
	
	//forum wrapping
	$("#forum").wrap("<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>");
	$(".node-forum-form").wrap("<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>");
	
	//replace facebook log in button
	var newFacebookSrc = "http://dev.businessbox.co.ke/sites/all/theme/businessbox_theme/img/facebook-login-btn.png";
	$(".user-login .facebook-action-connect img").attr(src,newFacebookSrc);
});


/*window.onload = function() {
*	    jarallax = new Jarallax();
	   	
	   	//set default values	
	   	jarallax.setDefault('.partner-logo', {opacity:'0'});/*Hide Logos or make them invisible*/
	   	
		/*jarallax.addAnimation('.partner',[{progress: "0%", top:"0"}, {progress: "100%", top: "400px"}]);
		jarallax.addAnimation('.partner-logo',[{progress: "0%", opacity:"0"}, {progress: "100%", opacity:"1"}]);
};
*/
