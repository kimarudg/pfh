 
    
 
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
            <!-- <ul class="nav navbar-nav navbar-right">
              <li><a href="#home"><i class="fa fa-home"></i>Home</a></li>
              <li><a href="#about"><i class="fa fa-user"></i>About Us</a></li>
              <li><a href="#services"><i class="fa fa-cogs"></i>Services</a></li>
              <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
              <li><a href="#blog"><i class="fa fa-pencil"></i>Blog</a></li>
              <li><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
              <li><a href="#contact"><i class="fa fa-envelope"></i>Login</a></li>
              <li><a href="#contact"><i class="fa fa-envelope"></i>Register</a></li>
            </ul> -->
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
  
  
  

  <div class="container" id="home">
    <div class="row">
      <div class="col col-md-12">        
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php print(drupal_get_path('theme', 'projects')); ?>/images/borehole.png" alt="slide 1" />
              <p class="flex-caption">Mauris quis sapien sed mauris gravida congue. Fusce convallis felis non lectus facilisis, vel consequat felis dictum.</p>
            </li>
            <li>
              <img src="<?php print(drupal_get_path('theme', 'projects')); ?>/images/hospital.png" alt="slide 2" />
              <p class="flex-caption">Proin porttitor urna et enim semper lobortis eu vitae diam. Fusce rutrum consequat dolor. Quisque ante leo, scelerisque nec faucibus.</p>
            </li>
            <li>
              <img src="<?php print(drupal_get_path('theme', 'projects')); ?>/images/templatemo_slide_3.jpg" alt="slide 3" />
              <p class="flex-caption">Quisque gravida ac nisl nec ultrices. Mauris tincidunt magna vitae feugiat tincidunt. Donec elit arcu, accumsan quis sagittis vitae, porttitor et velit.</p>
            </li>
          </ul>
        </div>            
      </div>
    </div>
  </div>
  <section id="about">
    <div class="about outer_container">
      <div class="container">
        <div class="row">
          <div class="col col-md-0 col-md-push-12 col-sm-12 navbar-toggle navbar-toggle-hide" data-toggle="collapse">
				<h1 class="tabhidden">About</h1>
            </div>
                    <div class="col col-md-12 col-md-pull-0 col-sm-12 center-row" id="home-explanation">
			<div class="row">
                            
                            <div class="col col-md-12 col-sm-12 col-xs-12">
							 <?php print $messages; ?>
                                <h3>Projects for Humanity is an initiative to help projects that impact on humanity to be seen and funded.
                               The goal is to ensure that these projects are able to raise funds and that their impact is felt in the target population.</h3>

                            </div>        
                        </div> 
		  
                    </div>
		  
          
        </div>
      </div>
    </div>
  </section>
  <section id="services">
    <?php print (render($page['services'])); ?>
  </section>
  <footer>
    <?php print(render($page['footer'])); ?>
  </footer>

  <!-- JavaScripts -->
  <script src="<?php print(drupal_get_path('theme', 'projects')); ?>/js/jquery.min.js"></script>
  <script src="<?php print(drupal_get_path('theme', 'projects')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php print(drupal_get_path('theme', 'projects')); ?>/js/jquery.singlePageNav.js"></script>
  <script src="<?php print(drupal_get_path('theme', 'projects')); ?>/js/templatemo_custom.js"></script>
  <script defer src="<?php print(drupal_get_path('theme', 'projects')); ?>/js/jquery.flexslider.js"></script>
  
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