<div class="container">
			<div id="header">
				<div class="top-header">
				<div class="row">
					<div class="col-lg-4">
						<div class="logo">
							<?php //print render($page['header_top_logo']); ?>
							  <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="/sites/all/themes/businessbox_theme/img/icon-logo-bb1.png" alt="<?php print t('Home'); ?>" />
		  
        </a>
      <?php endif; ?>
							
						</div>
					</div>
					<div class="col-lg-7">
						<div class="user-login">
							<?php print render($page['header_top_login']); ?>
						<?php global $user;
						if ($user->uid == 0 ) { ?>
						<a id="forgot-password" href="/user/password">Forgot Password?</a>
                                                
						<?php }
						else
						{ ?>
							<a href = "/user" class="join-btn btn my-account-btn">My Account</a> <a href ="/user/logout" class="join-btn btn btn-default">Logout</a>
						<?php }
						
						
						?>
						</div>
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
			
			<div class="mid-section">
				<div class="">
					<div class="row">
						<?php if ( isset($node) && $title): ?>
							<div class="article-heading col-lg-3">
									<h2><?php //print node_type_get_name($node->type);  
								
                                   print $title;
									?></h2>
							</div>	
						<?php endif; ?>
							
						
						<?php if ( isset($node) && $title) {?>
							<div class="article-content col-lg-9">
						<?php } else { ?>
						<div class="article-content">
							<?php } ?>
								
								<!--render tabs only if administrator has logged in-->
									<?php if ($tabs = render($tabs) and $is_admin): ?>
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
				</div>
			</div>
		</div>
		<div>
          <?php print $messages; ?>
        </div>
        
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
	</body>
</html>
