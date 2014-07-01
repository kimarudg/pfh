<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
function horizontal_login_block($form) {
  //$form['#action'] = url($_GET['q'], array('query' => drupal_get_destination()));
  $form['#id'] = 'horizontal-login-block';
  $form['#validate'] = user_login_default_validators();
  $form['#submit'][] = 'user_login_submit';
  $form['#attributes'] = array('class' => array('form-inline'));
  
  $form['name'] = array(
    '#type' => 'textfield',
    '#prefix' => '<div class="form-group">',
    '#suffix' => '</div>',
    '#maxlength' => USERNAME_MAX_LENGTH,
    '#size' => 15,
    '#required' => TRUE,
    '#default_value' => 'Username',
    '#attributes' => array(
	  'class' => array('username', 'form-control'),
      'onblur' => "if (this.value == '') {this.value = 'Username';}",
      'onfocus' => "if (this.value == 'Username') {this.value = '';}"
     ),
  );
   
  $form['pass'] = array(
   '#type' => 'password',
   '#maxlength' => 60,
   '#size' => 15,
   '#required' => TRUE,
   '#prefix' => '<div class="form-group">',
   '#suffix' => '</div>',
   '#default_value' => 'Password',
   '#attributes' => array(
	  'class' => array('password', 'form-control'),
      'onblur' => "if (this.value == '') {this.value = 'Password';}",
      'onfocus' => "if (this.value == 'Password') {this.value = '';}"
     ),
  );
 
 // $form['actions'] = array(
 //   '#type' => 'actions'
 // );
   
 //$form['actions']['submit'] = array(
   $form['submit'] = array(
    '#type' => 'button',
    '#value' => 'Login',
	'#attributes' => array(
	  'class' => array('login-btn', 'btn', 'btn-default'),
     ),
  );
 
  return $form;
}
function login_bar() {
  global $user;
  if ($user->uid == 0 ) {       
   $form = drupal_get_form('horizontal_login_block');
   return render($form);
  } else {
   // you can also integrate other module such as private message to show unread / read messages here
   return '<a id="forgot-password" href="/user">' . t('Welcome back ') . ucwords($user->name) . '</a><br>'; 
  }
}
function businessbox_theme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'businessbox_theme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'businessbox_theme_preprocess_user_login'
  ),
 );
 // Make user-register.tpl.php available
  $items['user_register_form'] = array (
     'render element' => 'form',
     'path' => drupal_get_path('theme','businessbox_theme'). '/templates',
     'template' => 'user-register',
     'preprocess functions' => array('businessbox_theme_preprocess_user_register_form'),
  );
  //custom contact form template
  $items['contact_site_form']= array(
		'render element' =>'form',
		'path'=>drupal_get_path('theme', 'businessbox_theme') . '/templates',
		'template'=>'contact-site-form',
		//'preprocess functions' => array('businessbox_theme_preprocess_contact_site_form'),
  );
  //custom edit profile form
	$items['user_profile_form']= array(
		'render element' =>'form',
		'path'=>drupal_get_path('theme', 'businessbox_theme') . '/templates',
		'template'=>'user-profile-edit',
		'preprocess functions' => array('businessbox_theme_preprocess_user_profile_form'),
  );
return $items;
}
//preprocessor for user registration form
function businessbox_theme_preprocess_user_register_form(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args;
  $vars['form'] = drupal_build_form('user_register_form', $form_state['build_info']['args']);
}
//preprocessor for contact form
function businessbox_theme_preprocess_contact_site_form(&$vars) {
	$vars['contact'] = drupal_render_children($vars['form']);
}

//preprocessor for custom page for resource views
function businessbox_theme_preprocess_views_view__resources(&$variables) {
    $variables['template_files'][] = "resources.page.tpl.php";
}

//pre-processor for user edit page
function businessbox_theme_preprocess_user_profile_form(&$vars) {
	$vars['editProfile'] = drupal_render_children($vars['form']);
}

//pre-processor for custom questions and answers page
function businessbox_theme_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type) && !empty($vars['node']->type) && ($vars['node']->type == 'question')) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
   if (isset($vars['node']->type) && !empty($vars['node']->type) && ($vars['node']->type == 'answer')) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}


function businessbox_theme_form_alter(&$form, &$form_state, $form_id) {
 
  if ($form_id == 'user_register_form'){
       unset($form['profile_businessbox_register']['field_you_are_from_which_county']);
       unset($form['profile_businessbox_register']['field_role_applying']);
       unset($form['profile_businessbox_register']['field_which_ideas_do_you_have']);
       unset($form['profile_businessbox_register']['field_initial_investment_amount']);
       unset($form['profile_businessbox_register']['field_investment_sought']);
       unset($form['profile_businessbox_register']['field_reasons_for_entrepreneur']);
       unset($form['profile_businessbox_register']['field_years_of_experience']);
       unset($form['profile_businessbox_register']['field_role_applying']);
       unset($form['profile_businessbox_register']['field_strengths']);
       unset($form['profile_businessbox_register']['field_weaknesses']);
       unset($form['profile_businessbox_register']['field_look_for_entrepreneur']);
       unset($form['profile_businessbox_register']['field__invested_in_companies']);
       unset($form['profile_businessbox_register']['field_criteria_for_investing']);
       unset($form['profile_businessbox_register']['field_preferred_involvement']);
       unset($form['profile_businessbox_register']['field_businesses_interested_in']);
       unset($form['profile_businessbox_register']['field_whats_your_exit_strategy']);
     }
/* 	 if ($form_id == 'user_register_form'){
    $form['#validate'][] = 'businessbox_theme_validate_register_form';
  }   */ 
}
/* 
function businessbox_theme_validate_register_form(&$form, &$form_state) {
  if ($form_state['values']['profile_businessbox_register']['field_first_name'] == "") {
    form_set_error('name', t('First name is mandatory.'));
  }

} 
 */



function businessbox_theme_preprocess_search_results(&$vars) {
  // search.module shows 10 items per page (this isn't customizable)
  $itemsPerPage = 10;

  // Determine which page is being viewed
  // If $_REQUEST['page'] is not set, we are on page 1
  $currentPage = (isset($_REQUEST['page']) ? $_REQUEST['page'] : 0) + 1;

  // Get the total number of results from the global pager
  $total = $GLOBALS['pager_total_items'][0];

  // Determine which results are being shown ("Showing results x through y")
  $start = (10 * $currentPage) - 9;
  // If on the last page, only go up to $total, not the total that COULD be
  // shown on the page. This prevents things like "Displaying 11-20 of 17".
  $end = (($itemsPerPage * $currentPage) >= $total) ? $total : ($itemsPerPage * $currentPage);

  // If there is more than one page of results:
  if ($total > $itemsPerPage) {
    $vars['search_totals'] = t('Displaying !start - !end of !total results', array(
      '!start' => $start,
      '!end' => $end,
      '!total' => $total,
    ));
  }
  else {
    // Only one page of results, so make it simpler
    $vars['search_totals'] = t('Displaying !total !results_label', array(
      '!total' => $total,
      // Be smart about labels: show "result" for one, "results" for multiple
      '!results_label' => format_plural($total, 'result', 'results'),
    ));
  }
}
