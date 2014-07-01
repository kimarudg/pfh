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
function projects_link($variables) {
$variables['options']['html'] = TRUE;
  return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '>' . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}

function projects_preprocess_image_style(&$vars) {
    //if($vars['style_name'] == 'slide_image_style'){
        $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
    //    }
}
// Remove Height and Width Inline Styles from Drupal Images
function projects_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
  if (isset($variables['attributes']['class']))
  {
	if(is_array($variables['attributes']['class']))
	{
		$variables['attributes']['class'][] = 'img-responsive';
	}
  }
  
}
function themename_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];
  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
  
}

function projects_theme($existing, $type, $theme, $path) {
  return array(
    'project_node_form' => array(
      'render element' => 'form',
      'template' => 'project-node-form',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'projects').'/templates',
    ),
  );
}

/**
* Preprocessor for theme('article_node_form').
*/

function projects_preprocess_project_node_form(&$variables) {
  // nodeformcols is an alternative for this solution.
	
    $variables['title'] = array();
	$variables['body'] = array();
	$variables['field_project_location'] = array();
	$variables['field_project_progress'] = array();
	$variables['field_project_type'] = array();
	$variables['field_project_status'] = array();
	$variables['field_project_social_links'] = array();
	$variables['field_pro_percentage_outstanding'] = array();
	$variables['field_project_sliding_image'] = array();
	$variables['field_project_social_case'] = array();
	$variables['field_project_images'] = array();

	$variables['form']['title']['#attributes']['class'][] = 'testclass';
	$variables['title'][] = $variables['form']['title'];
	$variables['body'][] = $variables['form']['body'];
	$variables['field_project_location'][] = $variables['form']['field_project_location'];
	$variables['field_project_progress'][] = $variables['form']['field_project_progress'];
	$variables['field_project_type'][] = $variables['form']['field_project_type'];
	$variables['field_project_status'][] = $variables['form']['field_project_status'];
	$variables['field_project_social_links'][] = $variables['form']['field_project_social_links'];
	$variables['field_pro_percentage_outstanding'][] = $variables['form']['field_pro_percentage_outstanding'];
	$variables['field_project_sliding_image'][] = $variables['form']['field_project_sliding_image'];
	$variables['field_project_social_case'][] = $variables['form']['field_project_social_case'];
	$variables['field_project_images'][] = $variables['form']['field_project_images'];
	
    hide($variables['form']['field_tags']);
    // Extract the form buttons, and put them in independent variable.
    $variables['buttons'] = $variables['form']['actions'];
    hide($variables['form']['actions']);
 
} /*
function projects_form_alter($form, $form_state, $form_id)
{
	
	$form['#attributes']['role'][] = 'form';
	$form['body']['#attributes']['class'][] = 'form-group';
	$form['title']['#attributes']['class'][] = 'form-group';
	$form['field_project_location']['#attributes']['class'][] = 'form-group';
	$form['field_project_progress']['#attributes']['class'][] = 'form-group';
	$form['field_project_type']['#attributes']['class'][] = 'form-group';
	$form['field_project_status']['#attributes']['class'][] = 'form-group';
	$form['field_project_social_links']['#attributes']['class'][] = 'form-group';
	$form['field_pro_percentage_outstanding']['#attributes']['class'][] = 'form-group';
	$form['field_project_sliding_image']['#attributes']['class'][] = 'form-group';
	$form['field_project_social_case']['#attributes']['class'][] = 'form-group';
	$form['field_project_images']['#attributes']['class'][] = 'form-group';
	$form['actions']['submit']['#attributes']['class'][] = 'btn btn-default';
	//drupal_set_message(print_r($form['#attributes']['class'], true));
	drupal_set_message(print_r($form['field_project_type'], true));
}
*/
function projects_button($element) {
	
  //Or you can overwrite theme_button which is responsible for the submit buttons. 
  //Place this in the template.php file and make sure to clear the cache after you make the changes. 
  //You can var_dump the $element and see how you can differentiate between the submit buttons.
  
  
  // Add some extra conditions to make sure we're only adding
  // the classto the right submit button
  if ($element['element']['#type'] == 'submit') {
    // Now add our custom class
    if (isset($element['element']['#attributes']['class'])) {
      $element['element']['#attributes']['class'][] = ' btn';
      $element['element']['#attributes']['class'][] = ' btn-default';
      $element['element']['#attributes']['class'][] = ' btn-green';
    }
    else {
      $element['element']['#attributes']['class'][] = 'btn';
      $element['element']['#attributes']['class'][] = 'btn-default';
      $element['element']['#attributes']['class'][] = 'btn-green';
    }
	
  }

  return theme_button($element);
}