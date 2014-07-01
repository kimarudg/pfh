<div class="container">
			<div class="top-header">
				<div class="row">
					<div class="col-lg-5  col-sm-6">
						<div class="logo">
							<?php print (render($page['header_top_logo'])); ?>
						</div>
					</div>
					<div class="col-lg-7 col-sm-6">
						<div class="user-login">
							<?php print (render($page['header_top_login'])); ?>
							<?php global $user;
							if ($user->uid == 0) { ?>
							<a id="forgot-password" href="user/password">Forgot Password?</a>
							<?php } else{ ?>
							<a href = "/user" class="join-btn btn my-account-btn">My Account</a> <a href ="user/logout" class="join-btn btn btn-default">Logout</a>
							<?php }
							?>
						</div>
					</div>
				</div>
			</div>
</div>

<div class="container">
	<div class="navigation-container">
		<nav class="top-navigation">
			<?php
			  // This code snippet is hard to modify. We recommend turning off the
			  // "Main menu" on your sub-theme's settings form, deleting this PHP
			  // code block, and, instead, using the "Menu block" module.
			  // @see https://drupal.org/project/menu_block
			  print theme('links__system_main_menu', array(
				'links' => $main_menu,
				'attributes' => array(
				  'class' => array('nav', 'navbar-nav'),
				  'role' => array('navigation'),
				),
				'heading' => array(
				  'text' => t('Main menu'),
				  'level' => 'h2',
				  'class' => array('element-invisible'),
				),
			  )); ?>
		</nav>
	</div>
</div>
<div class="container">
	<div class="carousel-bb">
		<?php print (render($page['slider_region'])); ?>
		<?php print $messages; ?>
	</div>
</div>

<div class="container">
			<!--<div class="mid-section-bg">
					<img src="img/mt-kenya-bg.png" />
			</div>-->
	<div class="row">
		<div class="mid-section">
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 pillar">
					<div id="inspiration">
						<?php print (render($page['homepage_inspiration'])); ?>
					</div>
				</div>
			
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 pillar">
					<div id="information">
						<?php print (render($page['homepage_information'])); ?>
					</div>
				</div>
			
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 pillar">
					<div id="collaboration">
						<?php print (render($page['homepage_collaboration'])); ?>
					</div>
				</div>
			
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 pillar">
					<div id="coach">
						<?php print (render($page['homepage_coach'])); ?>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 pillar">
					<div id="funding">
						<?php print (render($page['homepage_funding'])); ?>
					</div>
				</div>
			</div>
	</div>
		
</div>

<section class="container">
	<div class="coach-application">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="application-block">
					<?php print (render($page['homepage_coach_application'])); ?>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="application-block">
					<?php print (render($page['homepage_coach_application1'])); ?>
				</div>
			</div>
		</div>
	</div>
</section>
		
<section class="container">
	<div class="row">
		<div class="dynamic-feed">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				
					<!--<img src="img/twitter-sidebar-icon.png"/>-->
					<div class="twitter-feed">
					<?php  print render($page['homepage_twitter']);?>
					</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<!--<img src="img/facebook-sidebar-icon.png"/>-->
					<div class="facebook-feed">
						 <?php  print render($page['homepage_facebook']);?>
					</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<!--<img src="img/entrepreneur-questions.png"/>-->
					<div class="forum-feed">
						<?php  print render($page['homepage_feed']);?>
					</div>
			</div>
		</div>
	</div>
</section>
		
<section class="container">
	<div class="bb-partners">
		<div class="row">
			<?php print (render($page['homepage_partners'])); ?>
		</div>
	</div>
</section>

<!--footer-->
<div class="container">
	<footer>
		<div class="row">
			<div class="col-lg-4 col-xs-12">
						<div class="social-media">
							<?php print render($page['homepage_footer1']); ?>
						</div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="site-map">
							<?php print render($page['homepage_footer2']); ?>
						</div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="copyright">
							<?php print render($page['homepage_footer3']); ?>
						</div>
					</div>
		</div>
	</footer>
</div>