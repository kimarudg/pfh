
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">    
    <div class="container">
      <div class="row">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
             </div>
        </div>        
        
        <div class="col-md-10 col-sm-10 col-xs-12">
          <div class="navbar-collapse collapse menu">          
            <?php
                        // This code snippet is hard to modify. We recommend turning off the
                        // "Main menu" on your sub-theme's settings form, deleting this PHP
                        // code block, and, instead, using the "Menu block" module.
                        // @see https://drupal.org/project/menu_block
                        print theme('links__system_main_menu', array(
                          'links' => $main_menu,
                          'attributes' => array(
                            'class' => array('nav', 'navbar-nav', 'navbar-right'),
                          ),
                          'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                          ),
                        )); ?>
          </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.row -->
    </div>
  </nav>

  
<div class="container" id="content_details">

		<div class="row">
			<aside class="col-sm-2 sidebar sidebar-right">

				<div class="widget">
					<?php print(render($page['sidebar_first'])); ?>
				</div>

			</aside>
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
                            <header><h2 class="page-header"><?php print $title; ?></h2></header>
							 <?php print $messages; ?>
                            <!--render tabs only if administrator has logged in-->
									<?php if ($tabs = render($tabs) and $is_admin): ?>
										<div class="tabs"><?php print $tabs; ?></div>
									<?php endif; ?>
								
										<?php if ($action_links = render($action_links)): ?>
											<ul class="action-links">
												<?php print $action_links; ?>
											</ul>
										<?php endif; ?>
				<?php print(render($page['content'])); ?>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-2 sidebar sidebar-right">

				<div class="widget">
					<?php print(render($page['sidebar_second'])); ?>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>


  
  
  <footer>
     <?php print(render($page['footer'])); ?>
  </footer>

  <!-- JavaScripts -->
   <!-- JavaScripts -->
  <script src="<?php print($base_path.'/'.drupal_get_path('theme', 'projects')); ?>/js/jquery.min.js"></script>
  <script src="<?php print($base_path.'/'.drupal_get_path('theme', 'projects')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php print($base_path.'/'.drupal_get_path('theme', 'projects')); ?>/js/jquery.singlePageNav.js"></script>
  <script src="<?php print($base_path.'/'.drupal_get_path('theme', 'projects')); ?>/js/templatemo_custom.js"></script>
  <script defer src="<?php print($base_path.'/'.drupal_get_path('theme', 'projects')); ?>/js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
          $('.menu').singlePageNav();
        }
      });
    });

    $('#go-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, 1000);
      return false;
    });

  </script>