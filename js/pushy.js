var tallestHeight;
var pageHeights = new Array;

function setupPageWidths(){
	var amountOfSections = $('.modal').length;
	$('.modal').each(function(i){
		pageHeights[i] = $(this).outerHeight();
		if(i==(amountOfSections-1)){
			pageHeights.sort(function(a,b){return b-a});
			tallestHeight = pageHeights[0];
			if(windowHeight>650){
				$('#environment').css('height',(tallestHeight)+'px');
			}else{
				$('#environment').css('height',(tallestHeight)+'px');
			}
			
			$('#home, #aboutme, #work, #contact').css('height','100%');
		}
	})
}
$(document).ready(function(){
	if($('#work, #contact, #aboutme').length <=0){
		onepager = false;
		$('#bottom-home').hide();
	}
	
})
$(window).load(function(){	
	setupPageWidths()
	 
	$('nav#mainmenu li a').on('click', function(){
		if( onepager == true ){
			event.preventDefault();
		}
	}) 
	$('nav#mainmenu li, #bottom-home').on('click', function(event){
		if( onepager == true ){
			event.preventDefault();
			event.preventDefault();
			var modal = $(this).attr('data-modal');
			if($(this).attr('id')=="bottom-home"){
				modal = "home";
			}
			var increment = $('#'+modal).attr('data-scale');
			$('#contentWrapper').css(transformPrefix, 'translate3d(0, 0, '+increment+'px)');
			$('.modal').removeClass('active');
			$('#'+modal).addClass('active');
			setTimeout(function(){
				if($('#home').hasClass('active')){
					$('#bottom-home').addClass('hide');
					}else{
						$('#bottom-home').removeClass('hide');
				}
				$('body').animate({
					scrollTop: 0			
				},800)
			},500)
			
			/* currently buggy on android 4.1
			var stateObj = { foo: modal };
			history.pushState(stateObj, "", "#"+modal);*/
		} 
	})
	$('#home').addClass('active');
	
	if(onepager == true){
		if($('#home').hasClass('active')){
			$('#bottom-home').addClass('hide');
		}else{
			$('#bottom-home').removeClass('hide');
		}	
	}
})
/*window.onpopstate = function () {
	console.log('pop')
	var currentState = history.state;
	if(currentState==null)currentState="home";
	console.log(currentState);
	var modal = currentState;
	console.log('currentState modal is '+modal);
	var increment = $('#'+modal).attr('data-scale');
	$('#contentWrapper').css('-webkit-transform', 'translate3d(0, 0, '+increment+'px)');
	$('#'+modal).addClass('active');
}*/