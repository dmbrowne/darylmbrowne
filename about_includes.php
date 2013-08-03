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
