		<div class="container">
			<div id="header">
				<div class="top-header">
					<div class="logo">
						<?php print render($page['header_top_logo']); ?>
					</div>
					<div class="user-login">
						<?php print render($page['header_top_login']); ?>
						<?php // print login_bar(); ?>
						<?php // print login_bar(); ?>
						<?php global $user;
						if ($user->uid == 0 ) { ?>
						<a id="forgot-password" href="user/password">Forgot Password?</a>
                                                
						<?php }
						else
						{ ?>
							<a id="forgot-password" href="/user/logout">Logout</a>
						<?php }
						
						
						?></div>
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
			
			<!--<div class="row mid-section">-->
				<!--<div class="col-lg-12">-->
				
					<div class="row">
						<div class="article-heading col-lg-3">
							<?php //if ($title): ?>
								<h2><?php// print $node->type; ?> </h2>
							<?php //endif; ?>
							<div class="arrow-right">
								
							</div>
						</div>
					
						<div class="article-content col-lg-9">
							<?php if ($tabs = render($tabs)): ?>
								<div class="tabs"><?php print $tabs; ?></div>
							<?php endif; ?>
							<?php if ($action_links = render($action_links)): ?>
								<ul class="action-links">
									<?php print $action_links; ?>
								</ul>
              				<?php endif; ?>
							<?php print render($page['content']); ?>
						</div>
					</div>
				<!--</div>-->
			<!--</div>-->
		</div>
		
		<!--footer-->
		<div class="container">
			<footer>
				<div class="row">
					<?php print render($page['homepage_footer']); ?>
				</div>
			</footer>
		</div>	

