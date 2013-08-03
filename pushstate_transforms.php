<?php
include 'Mobile_Detect.php';
include 'UA_Detect.php';
$detect = new Mobile_Detect();
$browser = getUserAgent();
$pagetitle = "Daryl Browne";
include 'header.php';
include 'menu.php';
?>
	<link rel="stylesheet" href="css/stunin.css"/>
	<script type="text/javascript" src="js/pushy.js"></script>
<div id="environment">
<div id="contentWrapper">
	
	<section id="home" data-modal="home" data-scale="0" class="modal">
		<div class="clearfix">
			<div id="col-one">
				<div id="print">
					<span class="biggest">web<br/></span>
					<span class="bigger">development<br/></span>
					geared towards mobile<br/>
					<span class="top">from an</span> <span class="big">INDIVIDUAL</span> <span class="raised">with passion</span><br/> 		
					that moves <span class="italic">parrallel</span> and <span class="raised"><span class="raised">EVOLVES</span></span><br/>
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
	
	<section id="aboutme" data-scale="1000" class="modal">
		<div id="about" class="slideContainer">
		<div class="page-header">about me</div>
			<div class="slider clearfix">
				<div id="about-cube" class="cube">
					<div class="slide clearfix one">
						<section id="personal-description">
							<header>
								<div class="line"></div>
								<div class="circle-title">			
									Who is<br/>he	
								</div>
							</header>
							<p style="text-align:center;">I am Daryl.</p> 
							<p>I have a BSc in Multimedia Computing which i scored a 1st at the Middlesex University in Hendon, London.
							I am also a certified <strong>w3c</strong> web developer for mobile devices which i was awarded with in 2013. Most of my work
							is specialised for mobile devices such as the iPad or smartphones.</p>		
							<p>I've been in the web industry for just over 1 year and am very passionate about the web</p>
							<p>please visit my portfolio section to see some of my work</p>
							<p>For a copy of my resum&eacute; please <a href="#" id="showresumes">download here</a></p>
							<div id="resumes" class="hide">
								<div><a href="resumes/resume.pdf">Resume</a></div>
								<div><a href="resumes/resume_print.pdf">Resume (printable)</a></div>	
								<div><a href="resumes/resume_doc.docx">Resume (printable .doc version)</a></div>					
							</div>
						</section>
						<section id="skills">
							<header>
								<div class="line"></div>
								<div class="rectangle-title">Jargon</div>	
							</header>
							<p>These are a list of the languages that I know and use regularly.</p>
							<div style="height:130px; overflow:hidden;" class="clearfix">
								<ul class="skill-list">
									<li><span></span>HTML/ HTML5</li>
									<li><span></span>CSS/ CSS3</li>
									<li><span></span>jQuery</li>
									<li><span></span>XML/XSLT</li>
									<li><span></span>mySQL</li>
									<li><span></span>PHP</li>					
								</ul>
								<ul class="skill-graph hide">
									<li class="html"></li>
									<li class="css"></li>
									<li class="jquery"></li>
									<li class="xml"></li>
									<li class="sql"></li>
									<li class="php"></li>
									<li class="axis"><span>newbie</span><span>good</span><span>excellent</span></li>
								</ul>
							</div>
							<div class="graph-init">view statistically</div>
						</section>
					</div><!--slide-->
				<?php if ($detect->isTablet() || !($detect->isMobile())) {	?>
					<div id="skills-pt1" class="slide two">
						<header>
							<div class="line"></div>
							<div class="rectangle-title big">skills</div>	
						</header>
						<section id="skills-extended">
							<header class="sub">Levels:</header>
							<figure class="clearfix" style="margin:0px">
								<ul class="skill-list graphic">
									<li>HTML/ HTML5</li>
									<li>CSS/ CSS3</li>
									<li>jQuery</li>
									<li>javascript</li>
									<li>XML/XSLT</li>
									<li>mySQL</li>
									<li>PHP</li>
									<li>JSON</li>						
								</ul>
								<ul class="skill-graph graphic">
									<li class="html"></li>
									<li class="css"></li>
									<li class="jquery"></li>
									<li class="javascript"></li>
									<li class="xml"></li>
									<li class="sql"></li>
									<li class="php"></li>
									<li class="json"></li>
									<li class="axis"><span>newbie</span><span>rookie</span><span>spryo</span><span>dragon</span><span>dragon slayer</span></li>
								</ul>
							</figure>
						</section>
						<section id="jquery-vs-css">
							<header class="sub">Animations:</header>
							<p>Animations are one of my most distinctive skills. My complexity is way more apparent in css3 than it is in jQuery</p>
							<figure>							
								<div class="logo-holder">
									<img id="css" src="images/css3-vector.png"/>	VS <img id="jquery" src="images/jquery-square.png"/>
								</div>
								<div class="progress-bar-chart">
									<p class="label">jquery</p>
									<div class="css"><p class="label">css3</p></div>
								</div>
								<figcaption>
									not a huge fan of jquery animations. Css animations are a lot smoother and faster as they are hardware accelerated. But I've recently started working on desktop sites so jquery is starting to make its way into my repitoire  								
								</figcaption>
							</figure>
						</section>
					</div>
					<div id="skills-pt2" class="slide three">
						<header>
							<div class="line"></div>
							<div class="rectangle-title big">skills</div>	
						</header>
						<header class="sub" style="margin-bottom: 0.8em;">Levels:</header>
						<div class="chart clearfix">
							<figure id="pie">
								<img src="images/pie.png"/>					
							</figure>
							<section class="devices tablet">
								<header class="underline"><h2>Tablets:</h2></header>	
								<ul>
									<li>iPad</li>
									<li>Android Tablets</li>
										<ul>
											<li>Nexus 7</li>
											<li>Toshiba</li>
										</ul>								
								</ul>				
							</section>
							<section class="devices smart">
								<header class="underline"><h2>Smartphone:</h2></header>
									<ul>
										<li>iPhone 4 & 5</li>
										<li>Android Devices</li>
											<ul>
												<li>Android 2.2+</li>
											</ul>								
									</ul>						
							</section>
						</div>
					</div>
				<?php }?>
				</div><!--cube-->
			</div> <!--slider-->
			<nav class="navigation-indicator">
				<ul>		
				</ul>
			</nav>
		</div><!--slidecontainer-->
		
	</section>
	<section id="work" data-scale="2000" class="modal">
		<div class="page-header">portfolio gallery</div>	
		<div id="portfolio" class="slideContainer">
			<section class="slider items clearfix">
				<div id="portfolio-cube" class="cube">
					<article class="one active">	
					<?php if ($detect->isTablet()) {	
						echo '<img src="images/work/idthief_collarge.png" alt="" />';
						} elseif ($detect->isMobile()){
						echo '<img src="images/work/idthief_smart.png" alt=""/>';
						 }else{
						 	echo '<img src="images/work/idthief_collarge.png" alt="" />';
							}?>
						<section class="description">
							<header>Identity Thief</header>
							<div class="clearfix">
								<ul class="device-list">
									<li>Smart Phone</li>
									<li>Feature Phones</li>
								</ul>
								<div class="portfolio-item-description">
									Mobile website created for smartphones to promote/accompany the comical movie. 
								</div>
							</div>
						</section>
						<div class="item-links">					
							<?php 
							if($detect->isiOS() || $detect->isAndroidOS() || $browser == "chrome" || $browser == "safari"){
									if($detect->isMobile() && !($detect->isTablet())){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/identitythief/smart/index.page">Go To The Site</a></div>';						
									}
									if($browser == "chrome" || $browser == "safari"){?>
										<div class="portfolio-link smart simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/identitythief/smart/index.page" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Simulation</a></div>;								
							<?php	}
							}?>
						</div>
					</article>
					
					<article class="two">		
						<?php if ($detect->isTablet()) {	
							echo '<img src="images/work/ironfist_collarge.png" alt="" />';
							} elseif ($detect->isMobile()){
							echo '<img src="images/work/ironfists_smart.png" alt=""/>';
							 }else{
							 	echo '<img src="images/work/ironfist_collarge.png" alt="" />';
								}?>
						<section class="description">
							<header>Man with the Iron Fists</header>
							<div class="clearfix">
								<ul class="device-list">
									<li>Smart Phone</li>
									<li>Feature Phones</li>
								</ul>
								<div class="portfolio-item-description">
									I produced all the concepts and ideas for this smartphone, which was very well received.
								</div>
							</div>
						</section>
						<div class="item-links">
							<?php 
							if($detect->isiOS() || $detect->isAndroidOS() || $browser == "chrome" || $browser == "safari"){
									if($detect->isMobile() && !($detect->isTablet())){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/mwif/smart/index.page">Go To The Site</a></div>';						
									}
									if($browser == "chrome" || $browser == "safari"){?>
										<div class="portfolio-link smart simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/mwif/smart/index.page" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Simulation</a></div>							
							<?php	}
							}?>
						</div>
					</article>
					
					<article class="three">
						<?php if ($detect->isTablet()) {	
							echo '<img src="images/work/lesmis_collarge.png" alt="" />';
							} elseif ($detect->isMobile()){
							echo '<img src="images/work/lesmisipad_smart.png" alt=""/>';
							 }else{
							 	echo '<img src="images/work/lesmis_collarge.png" alt="" />';
								}?>
						<section class="description">
							<header>L&eacute;s Miserabl&eacute;s</header>
							<div class="clearfix">
								<ul class="device-list">
									<li>iPad</li>
								</ul>
								<div class="portfolio-item-description">
									iPad site for the feature movie/remake of the classic L&eacute;s Mis theatre west end show
								</div>
							</div>
						</section>
						<div class="item-links">
							<?php 
							if($detect->isiOS() || $detect->isAndroidOS() || $browser == "chrome" || $browser == "safari"){
									if($detect->isTablet()){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/lesmiserables/tablet/index.page">Go To The Site</a></div>';						
									}
									if($browser == "chrome" || $browser == "safari"){?>
										<div class="portfolio-link tablet simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/lesmiserables/tablet/index.page" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Simulation</a></div>								
							<?php	}
							}?>
						</div>
					</article>
					
					<article class="four">
						<?php if ($detect->isTablet()) {	
							echo '<img src="images/work/pitchperfect_collarge.png" alt="" />';
							} elseif ($detect->isMobile()){
							echo '<img src="images/work/pitchperfect_smart.png" alt=""/>';
							 }else{
							 	echo '<img src="images/work/pitchperfect_collarge.png" alt="" />';
								}?>
						<section class="description">
							<header>Pitch Perfect</header>
							<div class="clearfix">
								<ul class="device-list">
									<li>iPad</li>
									<li>Smart Phones</li>
									<li>Feature Phones</li>
								</ul>
								<div class="portfolio-item-description">
									I developed this for Smart, tablet and feature phones. Pitch perfect a comedy about accapella singing
								</div>
							</div>
						</section>
						<div class="item-links">
							<?php 
							if($detect->isiOS() || $detect->isAndroidOS() || $browser == "chrome" || $browser == "safari"){
									if($detect->isMobile() && !($detect->isTablet())){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/pitchperfect/smart/index.page">Go To The Site</a></div>';						
									}
									if($detect->isTablet()){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/pitchperfect/tablet/index.page">Go To The Site</a></div>';						
									}
									if($browser == "chrome" || $browser == "safari"){?>
										<div class="portfolio-link smart simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/pitchperfect/smart/index.page" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Phone Simulation</a></div>
										<div class="portfolio-link tablet simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/pitchperfect/tablet/index.page" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Tablet Simulation</a></div>							
							<?php	}
							}?>
						</div>
					</article>
					
					<article class="five">
						<?php if ($detect->isTablet()) {	
							echo '<img src="images/work/thisis40_collarge.png" alt="" />';
							} elseif ($detect->isMobile()){
							echo '<img src="images/work/thisis40_smart.png" alt=""/>';
							 }else{
							 	echo '<img src="images/work/thisis40_collarge.png" alt="" />';
								}?>
						<section class="description">
							<header>This is 40</header>
							<div class="clearfix">
								<ul class="device-list">
									<li>iPad</li>
									<li>Smart Phones</li>
									<li>Feature Phones</li>
								</ul>
								<div class="portfolio-item-description">
									I developed this for Smart, tablet and feature phones.
								</div>
							</div>
						</section>
						<div class="item-links">
							<?php 
							if($detect->isiOS() || $detect->isAndroidOS() || $browser == "chrome" || $browser == "safari"){
									if($detect->isMobile() && !($detect->isTablet())){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/thisis40/smart/index.page">Go To The Site</a></div>';						
									}
									if($detect->isTablet()){
										echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/thisis40/tablet/index.page">Go To The Site</a></div>';						
									}
									if($browser == "chrome" || $browser == "safari"){?>
										<div class="portfolio-link smart simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/thisis40/smart/index.page" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Phone Simulation</a></div>
										<div class="portfolio-link tablet simulation"><a href="http://www.universalpictures.mobi/cocoon/projects/stand-alone/intl/ufilms/thisis40/tablet/index.page" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Tablet Simulation</a></div>							
							<?php	}
							}?>
						</div>
					</article>
				</div>			
			</section>
			<section id="portfolio-item-details">
				
			</section>
			<nav class="navigation-indicator">
				<ul>
					<li><img src="images/work/identitythief_thumb.jpg"/></li>
					<li><img src="images/work/ironfist_thumb.jpg"/></li>
					<li><img src="images/work/lesmis_thumb.jpg"/></li>
					<li><img src="images/work/pitchperfect_thumb.jpg"/></li>
					<li><img src="images/work/thisis40_thumb.jpg"/></li>
				</ul>		
			</nav>
		</div>
	</section>
	<section id="contact" data-scale="3000" class="modal">
		<div class="page-header">contact me</div>
			<form id="contact-form" action="process.php" method="GET">
				<fieldset>
					<legend>Get In Touch</legend>
										<label class="entry-label" for="email">Email:</label>	 
					<input name="email" type="email"/>
					
					<label for="message">Message:</label>
					<textarea name="message"></textarea>
					
					<div id="errormessage"></div>				</fieldset>
				<a id="submitlink" href="process.php"><input id="submit-button" type="submit" value="SUBMIT"/></a>			</form>
	</section>
</div>
</div>
</body>
</html>