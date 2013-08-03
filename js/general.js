var aboutSlideHeights = new Array;
var portfolioSlideHeights = new Array;
var windowWidth, halfWindowWidth, windowHeight;
var displacement = null;
var x_rounded= null;
var portfolioSlides;
var startY, startX;
var movingY;
var desktop = false;
var ajaxCall;
var onepager = true;
var transform, transformPrefix, transition, transitionPrefix, transitionEnd, transitionEndPrefix;

var transEndEventNames = {
    'WebkitTransition' : 'webkitTransitionEnd',
    'MozTransition'    : 'transitionend',
    'OTransition'      : 'oTransitionEnd',
    'msTransition'     : 'MSTransitionEnd',
    'transition'       : 'transitionend'
},
transEndEventName = transEndEventNames[ Modernizr.prefixed('transition') ];

function basicSlider(trgtSlide, parent){
	if($(parent+' .slider .slide').length >0){
		var slidePos = $(parent+' .slider .slide:nth-child('+trgtSlide+')').offset().left;
	 }else if($(parent+' .slider article').length >0){
		var slidePos = $(parent+' .slider article:nth-child('+trgtSlide+')').offset().left;
	}
	var increment = - slidePos;
	$('.slider').animate({
		'left': '+='+increment+'px'
	})
}
function showSkills(){
	$('#skills').addClass('graphactive');
	$('ul.skill-list li').addClass('hide').on('webkitTransitionEnd', function(){		
		$(this).addClass('shrink').on('webkitTransitionEnd', function(){
			$(this).off('webkitTransitionEnd');
			$('#skills ul').addClass('graphic');
			setTimeout(function(){
				$('ul.skill-graph li').removeClass('hide');
				},300)
		})
	})
}
function setupSkillNav(){
	if($('#about .slide').length>0){
		var amountOfSlides = $('#about .slide').length;
		if (amountOfSlides >1){
			for(var i=1;i<=amountOfSlides;i++){
				$('#about .navigation-indicator ul').append('<li data-aboutslide="'+i+'"></li>');
			}
			$('#about .navigation-indicator ul li:first-child').addClass('active');
		}
	 }
	 if($('#portfolio article').length>0){
		var amountOfSlides = $('#portfolio article').length;
		portfolioSlides = amountOfSlides;//used in cube rotation later on
	
		for(var i=0;i<=(amountOfSlides+1);i++){
			$('#portfolio .navigation-indicator ul li:eq('+i+')').attr('data-portfolio-slide', ''+(i+1)+'');
		}
		$('#portfolio .navigation-indicator ul li:first-child').addClass('active');
	}		
}
function hideSkills(){
	$('#skills').removeClass('graphactive');
	$('ul.skill-graph li').removeClass('hide');
	setTimeout(function(){
		$('#skills ul').removeClass('graphic');
		$('ul.skill-list li').removeClass('hide');
		$('ul.skill-list li').removeClass('shrink');
	},300)
}
function cubeSliderSlide(parentDiv,targetSlide, elIndex){
	var parentDiv = "#"+parentDiv;
	console.log('parentDiv is '+parentDiv);

	if( $('html').hasClass('csstransforms3d csstransitions') ){
		console.log('equation is '+$(parentDiv+'-cube'));
		$(parentDiv+'-cube').removeClass().removeAttr('style');
		$(parentDiv+'-cube').addClass('page'+targetSlide);
		
		//additional for portfolio cube
		$(parentDiv+' article').removeClass('active');
		$(parentDiv+' article:eq('+elIndex+')').addClass('active');
		x_rounded = (72 * parseInt(targetSlide))-72;
		x_rounded = Math.abs(x_rounded) * -1;
		portfolioDescriptionDump()
		
	 }else{
		basicSlider(targetSlide, parentDiv);
	}
}
function setupAboutMe3d(){
	
	if (windowWidth>900){
		windowsize = windowWidth-(windowWidth/3);
	}else{
		windowsize = windowWidth;		
	}
	$('.csstransforms.csstransitions #portfolio .slider').width(windowsize);
	$('.csstransforms.csstransitions #about .slider').width(windowWidth);	
	
	if($('.csstransforms3d.csstransitions #about .slide').length>0){
		var slideAmount = $('.csstransforms3d.csstransitions #about .slide').length;
		$('.csstransforms3d.csstransitions #about .slide').each(function(index){
			aboutSlideHeights[index] = ($(this).outerHeight())+50;	
			aboutSlideHeights.sort(function(a,b){return b-a});
			if(index == (slideAmount-1)){
				setupAboutMeCube(aboutSlideHeights, '#about')
			}	
		})
	}
	if($('.csstransforms3d.csstransitions #portfolio article').length>0){
		var slideAmount = $('.csstransforms3d.csstransitions #portfolio article').length;
		$('.csstransforms3d.csstransitions #portfolio article').each(function(index){
			portfolioSlideHeights[index] = ($(this).outerHeight())-70;//minus 60px (80 because translation creates bigger gaps)so that the portfolio link buttons are included in the height calculation becaus ethe height then becomes to large with it	
			portfolioSlideHeights.sort(function(a,b){return b-a});
			if(index == (slideAmount-1)){
				setupAboutMeCube(portfolioSlideHeights, '#portfolio');
			}	
		})
	}
}
function setupAboutMeCube(slideHeights,sliderContainer){
	var largestSlideHeight = slideHeights[0];
	console.log(largestSlideHeight);
	$(sliderContainer+' .slider').css('height', largestSlideHeight+'px');
}
function portfolioDescriptionDump(){
	if(desktop===true){
		var htmlDump = $('#portfolio article.active .description').html();
		$('#portfolio-item-details').html(htmlDump);	
	}
}	
function validateEmail(email){ 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
function contactForm(urllink){
	var email, message;
	var errormsg = "";
	var emailaddr = $('input[name="email"]').val();
	var sendmsg = $.trim($('textarea[name="message"]').val())
	
	if(emailaddr == null || emailaddr == ""){
		email = false;
		errormsg = errormsg + "<li>Please enter a return email address</li>";
	}else{
		var emailValid = validateEmail(emailaddr);
		if(emailValid==true){
			email = true
		}else{
			email = false;
			errormsg = errormsg + "<li>The email address given is not valid</li>";
		}
	}
		
	if( sendmsg != "" ){
		message = true;
	 }else{
		message = false;
		errormsg = errormsg + "<li>Please fill out your message</li>";
	}
	
	if (message==true && email == true){
		urllink = urllink+"?email="+emailaddr+"&message="+sendmsg;
		var request = $.ajax({url: urllink})
		request.success(function(data){
			var newContent = $(data).filter('#feedback');
			$('#contact').html(newContent);
		})
				
	}else{
		$('#errormessage').html(errormsg);
	}
}
/*======== window functions =======*/
var resizeComplete = false;
$(window).resize(function() {
    if (resizeComplete) clearTimeout(resizeComplete);
    resizeComplete = setTimeout(function() {
  		windowWidth = document.body.clientWidth;
  		if(windowWidth>900) desktop = true;
		halfWindowWidth = windowWidth/2;
      setupAboutMe3d()
    }, 500);
});
$(document).ready(function(){
	windowWidth = document.body.clientWidth;
	windowHeight = document.body.clientHeight;
	halfWindowWidth = windowWidth/2;
	if(windowWidth>900) desktop = true;
	if( $('html').hasClass('csstransforms3d csstransitions') ){
		transform = Modernizr.prefixed('transform');
		transformPrefix = transform.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
		transition = Modernizr.prefixed('transition');
		transitionPrefix = transition.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
	}
	
	/*transitionEnd = Modernizr.prefixed('transitionEnd');
	transitionEndPrefix = transitionEnd.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
	*/
	/*var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1;// returns true or false	
	alert(isAndroid);
	if (ua.lastIndexOf('chrome/') > 0){
		var chromeVersion = ua.substr(ua.lastIndexOf('Chrome/') + 7, 2);
		alert(ua.substr(ua.indexOf('Chrome/') + 7))
	}
	if( isAndroid==true && chromeVersion < 25){
		onepager= false;
		alert(chromeVersion);
	}*/
	setupSkillNav();
	
	$('#skills ul.skill-graph li:not(.axis)').addClass('hide')
	
	$('#skills .graph-init').on('click', function(){
		if ($('#skills').hasClass('graphactive')){
			hideSkills();
			}else{
				showSkills();
				}		
		})
	$('#about .navigation-indicator ul li').on('click',function(){
		console.log('fire');
		var parentdiv = $(this).parents('.slideContainer').attr('id');
		$('#about .navigation-indicator ul li').removeClass('active');
		$(this).addClass('active');
		elPosition = $(this).index();
		var slideRepresenter = $(this).attr('data-aboutslide');
		cubeSliderSlide(parentdiv, slideRepresenter, elPosition);
	})
	$('#portfolio .navigation-indicator ul li').on('click',function(){
		var parentdiv = $(this).parents('.slideContainer').attr('id');
		$('#portfolio .navigation-indicator ul li').removeClass('active');
		$(this).addClass('active');
		elPosition = $(this).index();
		console.log('elPosition is '+elPosition);
		var slideRepresenter = $(this).attr('data-portfolio-slide');	
		cubeSliderSlide(parentdiv,slideRepresenter, elPosition);
	})
	
	$('#submitlink').on('click',function(){
		event.preventDefault();
		var processpage = $(this).prop('href');
		contactForm(processpage);
	})
	
	$('#showresumes').on('click', function(){
		event.preventDefault();
		$('#resumes').toggleClass('hide');	
	})
	
	/*if($.browser.msie || (chromeVersion < 25 && isAndroid == true)){
		ajaxCall = 0;
		$('#enviroment #aboutme, #enviroment #contact, #enviroment #work').css('display','none');
	}else{
		ajaxCall = 1;
	}*/
	if($.browser.msie){
		$('html').removeClass('csstransforms csstransforms3d csstransitions');
		onepager = false;
	}
})
$(window).load(function(){
	window.scrollTo(0,1);
	
	if( $('html').hasClass('csstransforms3d csstransitions') ){
		setupAboutMe3d()
	}
	
})