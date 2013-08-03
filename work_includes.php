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
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/identitythief/smart/">Go To The Site</a></div>';						
                                                        }
                                                        if($browser == "chrome" || $browser == "safari"){?>
                                                                <div class="portfolio-link smart simulation"><a href="http://universalpictures.mobi/us/movies/identitythief/smart/" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Simulation</a></div>;								
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
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/mwif/smart/">Go To The Site</a></div>';						
                                                        }
                                                        if($browser == "chrome" || $browser == "safari"){?>
                                                                <div class="portfolio-link smart simulation"><a href="http://universalpictures.mobi/us/movies/mwif/smart/" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Simulation</a></div>							
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
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/cus/movies/lesmiserables/tablet/">Go To The Site</a></div>';						
                                                        }
                                                        if($browser == "chrome" || $browser == "safari"){?>
                                                                <div class="portfolio-link tablet simulation"><a href="http://universalpictures.mobi/cus/movies/lesmiserables/tablet/" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Simulation</a></div>								
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
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/pitchperfect/smart/">Go To The Site</a></div>';						
                                                        }
                                                        if($detect->isTablet()){
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/pitchperfect/tablet/">Go To The Site</a></div>';						
                                                        }
                                                        if($browser == "chrome" || $browser == "safari"){?>
                                                                <div class="portfolio-link smart simulation"><a href="http://universalpictures.mobi/us/movies/pitchperfect/smart/" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Phone Simulation</a></div>
                                                                <div class="portfolio-link tablet simulation"><a href="http://universalpictures.mobi/us/movies/pitchperfect/tablet/" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Tablet Simulation</a></div>							
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
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/thisis40/smart/">Go To The Site</a></div>';						
                                                        }
                                                        if($detect->isTablet()){
                                                                echo '<div class="portfolio-link"><a href="http://universalpictures.mobi/us/movies/thisis40/tablet/">Go To The Site</a></div>';						
                                                        }
                                                        if($browser == "chrome" || $browser == "safari"){?>
                                                                <div class="portfolio-link smart simulation"><a href="http://universalpictures.mobi/us/movies/thisis40/smart/" onclick="window.open(this.href,'','width=320,height=480,scrollbars=yes'); return false;">View Phone Simulation</a></div>
                                                                <div class="portfolio-link tablet simulation"><a href="http://universalpictures.mobi/us/movies/thisis40/tablet/" onclick="window.open(this.href,'','width=1024,height=680,scrollbars=no'); return false;">View Tablet Simulation</a></div>							
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
