function touchCubeMove(touchposition, yPos, moveDefault){
		if(x_rounded == null){	
			displacement = startX - touchposition;	
			if(touchposition > startX){
				displacement = Math.abs(displacement) ;
			 }else{
				displacement = Math.abs(displacement) * -1;
			}
			console.log(displacement);
			displacement = (displacement/2);
			$('#portfolio-cube').css(transitionPrefix, 'none');
			$('#portfolio-cube').css(transformPrefix, 'translateZ(-700px) rotateY('+displacement+'deg)');
		}else{
			displacement = startX - touchposition;	
			if(touchposition > startX){
				displacement = (Math.abs(displacement));
			 }else{		 	
				displacement = (Math.abs(displacement) * -1);
			}
			
			displacement = x_rounded + (displacement/2);
			$('#portfolio-cube').css(transitionPrefix, 'none');
			$('#portfolio-cube').css(transformPrefix, 'translateZ(-700px) rotateY('+ displacement+'deg)');
		}	
}
function touchCubeEnd(){
	/*take current rotate position when finger leaves screen by substringing the rotataY value from the style attribute string
	 *then convert that into a float/integer and store it in 'x_rounded' so that when touchmove occurs again it uses that value
	 *as the starting point */
	var cubeStyle = $('#portfolio-cube').attr('style');
	var rotateValue = cubeStyle.substr(cubeStyle.indexOf('rotateY('));
	rotateValue = rotateValue.substr(8);
	rotateValue = parseFloat(rotateValue);
	x_rounded = 72 * Math.round(rotateValue/72);

	/* remove the rotate and transform value that is left there when the users finger leaves the screen and update it to
		the value stored in 'X_rounded' above */
	$('#portfolio-cube').removeAttr('style');
	$('#portfolio-cube').css(transformPrefix, 'translateZ('+cubeFinalTranslateValue+'px) rotateY('+ x_rounded+'deg)');
	
	/*to avoid reckless spining if the icons are pressed, if the cube has been lapped (rotated more than 360deg) then remove
	the high rotate number and replace with a value lower than 360*/
	if(x_rounded >= "360" || x_rounded <= "-360"){
		$('#portfolio-cube').on(transEndEventName, function(){
			$(this).off(transEndEventName);
	
			if(x_rounded=="-360" || x_rounded=="360"){
				x_rounded=0;			
				} else if (x_rounded=="-432" || x_rounded=="432"){
					x_rounded=72;
					}else if (x_rounded=="-504" || x_rounded=="504"){
						x_rounded=144;
						}else if (x_rounded=="-576" || x_rounded=="576"){
							x_rounded=216;
							}else if (x_rounded=="-648" || x_rounded=="648"){
								x_rounded=288;
			}
								
			$('#portfolio-cube').removeAttr('style');
			var transitionDuration = transitionPrefix+'-duration';
			$('#portfolio-cube').css({
				transitionDuration: '0',
				transformPrefix: 'translateZ('+cubeFinalTranslateValue+'px) rotateY('+ x_rounded+'deg)'
			});
			
			//update the nav icons by diving the current angle of rotate by the shapes' equalateral angle of rotation
			currentSlideNumber = x_rounded/72;
			if(currentSlideNumber < 0){
				currentSlideNumber = Math.abs(currentSlideNumber)
			 }else if(currentSlideNumber > 0){
			 	currentSlideNumber = portfolioSlides - currentSlideNumber;
			 	}
			$('#portfolio .navigation-indicator ul li, #portfolio article').removeClass('active');
			$('#portfolio .navigation-indicator ul li:eq('+currentSlideNumber+'), #portfolio article:eq('+currentSlideNumber+')').addClass('active');		
		})
	}else{
		//update the nav icons by diving the current angle of rotate by the shapes' equalateral angle of rotation
		currentSlideNumber = x_rounded/72;
		if(currentSlideNumber < 0){
			currentSlideNumber = Math.abs(currentSlideNumber)
		 }else if(currentSlideNumber > 0){
		 	currentSlideNumber = portfolioSlides - currentSlideNumber;
		 	}
		$('#portfolio .navigation-indicator ul li, #portfolio article').removeClass('active');
		$('#portfolio .navigation-indicator ul li:eq('+currentSlideNumber+'), #portfolio article:eq('+currentSlideNumber+')').addClass('active');
	}
	portfolioDescriptionDump()
}
$(document).ready(function(){
	if(windowWidth<600){
		cubeFinalTranslateValue=-400;
		} else if(windowWidth>=600 && windowWidth<900){
			cubeFinalTranslateValue=-500;
			}else{
				cubeFinalTranslateValue=-500;
				}
})
$(window).load(function(){
	$('#portfolio #portfolio-cube').on('touchstart', function(e){
		event.preventDefault();
		startX = event.touches[0].pageX;	
		startY = event.touches[0].pageY;	
	})
	$('#portfolio #portfolio-cube').on('touchmove', function touching(){
		moveY = event.touches[0].pageY;
		moveX = event.touches[0].pageX;
		movingX = moveX - startX;
		movingY = moveY - startY;
		if (movingX < 7 && movingX > -7 ){
		 	return true;
		}else{
			event.preventDefault();
			touchCubeMove(moveX);
		}
	})
	$('#portfolio #portfolio-cube').on('touchend', function(){
		movingY = 0;
		touchCubeEnd()
	})
})