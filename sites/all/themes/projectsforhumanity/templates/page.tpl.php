<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


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
       <header class="header" id="pageheader" role="banner">
           <?php print render($page['header']); ?>
       </header>
    </div>
    <div class="container" >
        <?php print $breadcrumb; ?>
    </div>
       
    <div id="main" class="container">

        <div id="content" class="column" role="main">
          <?php print render($page['highlighted']); ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        </div>
     </div>

        
  <div id="main2" class="container"> 
      
      <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first  = render($page['sidebar_first']);
        $sidebar_second = render($page['sidebar_second']);
      ?>

      <?php if ($sidebar_first || $sidebar_second): ?>
        <aside class="sidebars">
          <?php print $sidebar_first; ?>
          <?php print $sidebar_second; ?>
        </aside>
      <?php endif; ?>

    </div>

  <?php print render($page['footer']); ?>


<?php print render($page['bottom']); ?>
