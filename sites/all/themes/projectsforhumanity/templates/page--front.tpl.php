
	<div>
	<div class="container">
            <div id="header">
                <div class="top-header">
                    <div class="logo col-sm-6">
                       <span>
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img class="text-logo-bb" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                         <?php endif; ?>
                        <?php if ($site_name): ?>
                            <span class="header__site-name" id="site-name">
                              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
                            </span>
                         <?php endif; ?>
                          <?php if ($site_slogan): ?>
                            <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
                          <?php endif; ?>
                       </span>    
                    </div>
                    <div class="user-login col-sm-6">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <input class="username form-control" type="text" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <input class="password form-control" type="password" placeholder="Password"/>
                            </div>
                            <button class="login-btn btn btn-default">Login</button>
                            <button class="join-btn btn btn-default">Join</button>
                        </form>
                        <a id="forgot-password" href="#">Forgot Password?</a>
                    </div>
               </div>
            </div>
        </div>
    <div class="container">
        <div class="nav-bar navbar-inverse navbar-static-top" role="navigation">
            <div class="navigation-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                        // This code snippet is hard to modify. We recommend turning off the
                        // "Main menu" on your sub-theme's settings form, deleting this PHP
                        // code block, and, instead, using the "Menu block" module.
                        // @see https://drupal.org/project/menu_block
                        print theme('links__system_main_menu', array(
                          'links' => $main_menu,
                          'attributes' => array(
                            'class' => array('nav', 'navbar-nav'),
                          ),
                          'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                          ),
                        )); ?>
		</div>
            </div>
        </div>
    </div>
            
        <div class="container">
			<div class="row mid-section">
				<?php print (render($page['homeslider'])); ?>
			</div>
        </div>
       <div class="container">
	
                            <div class="col-lg-4">
				<?php print (render($page['homeicon1'])); ?>
                            </div>
                            <div class="col-lg-4">
				<?php print (render($page['homeicon2'])); ?>
                            </div>
                            <div class="col-lg-4">
				<?php print (render($page['homeicon3'])); ?>
                            </div>
				
				
		
		</div>
        <div class="container">
			<div class="row mid-section">
				<div class="">
					<div class="col-lg-6">
						<?php print(render($page['get_involved'])); ?>
					</div>
				
					<div class="col-lg-6">
                                            <?php print(render($page['vision'])); ?>
                                            
					</div>
				
				
				</div>
			</div>
	</div>
        <div class="container">
			<footer>
				<div class="row">
					<div>
						<div class="social-media col-lg-4 col-xs-12">
							<h5>Connect With Us</h5>
							<div id="facebook-icon" class="social-media-icon"></div>
							<div id="twitter-icon" class="social-media-icon"></div>
							<div id="google-plus-icon" class="social-media-icon"></div>
							<div id="linkedin-icon" class="social-media-icon"></div>
							<div id="youtube-icon" class="social-media-icon"></div>
						</div>
					</div>
					
					<div class="site-map col-lg-4 col-xs-12">
						<h5>Sitemap</h5>
					</div>
					
					<div class="copyright col-lg-4 col-xs-12">
						<p>Some footer text will come here: they could be links to privacy policies or some recognition, or some other text that the owner of the system will want.</p>
						<div class="copyright-text">&copy; 2014 <i>Innovis</i></div>
					</div>
				</div>
			</footer>
		</div>
    </div>
