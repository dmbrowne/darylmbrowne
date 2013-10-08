<?php
include 'Mobile_Detect.php';
include 'UA_Detect.php';
$detect = new Mobile_Detect();
$browser = getUserAgent();

$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

if(stripos($ua,'android') !== false && stripos($ua,'mobile') !== false) {
  $isAndroid = true;
}
if(stripos($ua,'chrome') !== false){
	$chromeVersion = substr($ua, stripos($ua,'chrome/')+7, 2);
}
if(stripos($ua,'msie') !== false){
	$msIE = true;
}
$pagetitle = "Daryl Browne";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" href="css/stunin.css"/>
<script type="text/javascript" src="js/pushy.js"></script>

<div id="environment">
<div id="bottom-home" data-modal="homemob" data-scale="0" class="modal">home</div>
<div id="contentWrapper">	
	<section id="home" data-modal="home" data-scale="0" class="modal">
		<div class="clearfix">
			<div id="col-one">
				<div id="print">
					<span class="biggest">web<br/></span>
					<span class="bigger">development<br/></span>
					geared towards mobile<br/>
					<span class="top">from an</span> <span class="big">INDIVIDUAL</span> <span class="raised">with passion</span><br/> 		
					who moves <span class="italic">parallel</span> and <span class="raised"><span class="raised">EVOLVES</span></span><br/>
					as fast as the
					web industry itself...
				</div>
				
				<h1 class="me">Daryl Browne</h1>
				
				<div class="summary">
					<header>
						<div class="line"></div>
						<div class="circle-title">			
							About_<br/>Me()	
						</div>
					</header>
					<div class="content">
						<p class="body-copy">
						I am a front end web developer, using the latest <strong>CSS3</strong> and <strong>HTML5</strong> techniques to achieve remarkable results 
						primarily for mobile devices - due to my experience and current trade. But I do however enjoy creating for 
						other screen sizes too.
						</p>
					</div>
				</div>
			</div>
			<div id="col-two">
				<h1 class="me">Daryl Browne</h1>
				
				<div class="underline">
					<h2>Recent Work</h2>
				</div>		
				
				<div class="content">	
					<div class="recent-work-item">
						<div class="title">The Man With The Iron Fists</div>
						A mobile website/web-app created for smart and feature phones for the film from Wu-Tang's RZA&copy;
						<div class="client">Universal Pictures</div>
					</div>
					
					<div class="recent-work-item">
						<div class="title">World War Z</div>
						A simple website based on feature phones for use on both feature and smart for a film about zombies with Brad Pitt
						<div class="client">Paramount Pictures</div>
					</div>
				</div>
			</div>
		</div><!-- .clearfix -->
		<footer>(c) Copyright Daryl Browne 2013</footer>
	</section><!-- #home -->
	
	<?php
		if(isset($isAndroid)){//user is using an android
			if(isset($chromeVersion)){
				//user is also using chrome for android
				if($chromeVersion >= 25){
					//3d transformations work well in this version of chrome for android
					echo '<section id="aboutme" data-scale="1000" class="modal">';
					include 'about_includes.php';
					echo '</section>';
				}
			}else{
				//they are using the stock browser
				echo '<section id="aboutme" data-scale="1000" class="modal">';
				include 'about_includes.php';
				echo '</section>';
			}
		}
		if(isset($msIE)){
			if( $msIE == false){
				//show for all other browsers except IE!!! ha!
				echo '<section id="aboutme" data-scale="1000" class="modal">';
				include 'about_includes.php';
				echo '</section>';
			}
		}	
		if(!(isset($isAndroid))&& !(isset($msIE))){
			echo '<section id="aboutme" data-scale="1000" class="modal">';
			include 'about_includes.php';
			echo '</section>';
		}	
	?>
	<?php 
		if(isset($isAndroid)){//user is using an android
			if(isset($chromeVersion)){
				//user is also using chrome for android
				if($chromeVersion >= 25){
					//3d transformations work well in this version of chrome for android
					echo '<section id="work" data-scale="2000" class="modal">';
					include 'work_includes.php';
					echo '</section>';
				}
			}else{
				//they are using the stock browser
				echo '<section id="work" data-scale="2000" class="modal">';
				include 'work_includes.php';
				echo '</section>';
			}
		} 
		if(isset($msIE)){
			if( $msIE == false){
				//show for all other browsers except IE!!! ha!
				echo '<div><section id="work" data-scale="2000" class="modal">';
				include 'work_includes.php';
				echo '</section></div>';
			}
		}
		if(!(isset($isAndroid))&& !(isset($msIE))){
			echo '<div><section id="work" data-scale="2000" class="modal">';
				include 'work_includes.php';
				echo '</section></div>';
		}				
	?>	
	<?php
		if(isset($isAndroid)){//user is using an android
			if(isset($chromeVersion)){
				//user is also using chrome for android
				if($chromeVersion >= 25){
					//3d transformations work well in this version of chrome for android
					echo '<section id="contact" data-scale="3000" class="modal">';
					include 'contact_includes.php';
					echo '</section>';
				}
			}else{
				//they are using the stock browser
				echo '<section id="contact" data-scale="3000" class="modal">';
				include 'contact_includes.php';
				echo '</section>';
			}
		} 
		if(isset($msIE)){
			if( $msIE == false){
				//show for all other browsers except IE!!! ha!
				echo '<section id="contact" data-scale="3000" class="modal">';
				include 'contact_includes.php';
				echo '</section>';
			}
		}
		if(!(isset($isAndroid))&& !(isset($msIE))){
			echo '<section id="contact" data-scale="3000" class="modal">';
			include 'contact_includes.php';
			echo '</section>';
		}				
	?>

</div>
</div>
</body>
</html>