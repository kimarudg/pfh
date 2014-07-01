<?php
/**
 * @file
 * Returns the HTML for Panels Everywhere's navigation pane.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/2052507
 */
?>
<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <div class="header__name-and-slogan" id="name-and-slogan">
    <?php if ($site_name): ?>
      <h1 class="header__site-name" id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <h2 class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></h2>
    <?php endif; ?>
  </div>
<?php endif; ?>

<div class="container">
			<div id="header">
				<div class="top-header">
					<div class="logo">
						<img class="text-logo-bb" src="<?php print(drupal_get_path('theme', 'projectsforhumanity')); ?>/img/logo.png"/>
					</div>
					<div class="user-login">
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
			<div class="navigation-container">
				<nav class="top-navigation">
					<ul class="nav navbar-nav" role="navigation"> 
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Connect</a></li>
						<li><a href="#">Coach</a></li>
						<li><a href="#">Investor</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>