<?php
$elements = drupal_get_form('user_login_block');
    /**
      do all your rendering stuff here
      drupal_render seems to add html to the elements array
      and instead of printing what is returned from drupal_render
      you can use the added html in ['#children'] elements of the arrays
      to build the form in the order you want.
    **/
    $rendered = drupal_render($elements);
    // to see what you have to work with
   $elements['actions']['#children'] = '<input type="submit" id="edit-submit--2" name="op" value="Login" class="login-btn btn btn-default" /><a href="user/register" class="join-btn btn btn-default">Join</a>';
   $elements['name']['#children'] = '<div class="form-group">
							<input name="name" class="username form-control" type="text" placeholder="Username" />
							</div>';
   
  $elements['pass']['#children'] = '<div class="form-group">
							<input name="pass" id="edit-pass--2" class="password form-control" type="password" placeholder="Password"/>
							</div>';
  
  
    $output  = '<form class="form-inline" role="form" action="' . $elements['#action'] .
                              '" method="' . $elements['#method'] .
                              '" id="' . $elements['#id'] .
                              '" accept-charset="UTF-8"><div>';
    $output .= $elements['name']['#children'];
    $output .= $elements['pass']['#children'];
    $output .= $elements['form_build_id']['#children'];
    $output .= $elements['form_id']['#children'];
    $output .= $elements['actions']['#children'];
    //$output .= $elements['links']['#children'];
    $output .= '</div></form>';
    print $output;