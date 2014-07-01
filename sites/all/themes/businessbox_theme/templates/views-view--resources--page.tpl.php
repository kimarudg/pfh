<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<!--left sidebar content-->
<div class="col-lg-2">
<div class="profile-info-box">
	<?php $views_block = module_invoke('views','block_view','user_block-block');
	print render($views_block);
	?>
	</div>
</div>
<!--end of left_sidebar-->
				
<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
	<div class="col-lg-7">
      <?php print $rows; ?>
    </div>
	</div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>
<!--rightsidebar-content-->
				<div class="col-lg-3">
					<div class="profile-sidebar">
                                              <?php print (render($page['sidebar_second'])); ?>
					<div class="profile-search">
						<form role="form">
							<?php
                                                    $block = module_invoke('search', 'block_view', 'search');
                                                    print render($block);
                                                         ?>
  						</form>
					</div>
					
					<div class="profile-twitter">
						<!--<img src="img/twitter-sidebar-icon.png"/>-->
						<p class="twitter-feed"><?php
                                                  $block = module_invoke('twitter_block', 'block_view', '1');
                                                  print render($block['content']);
                                                 ?>
						</p>
					</div>
					
					<div class="profile-facebook">
						<!--<img src="img/facebook-sidebar-icon.png"/>-->
						<p class="facebook-feed"><?php
                                                  $block = module_invoke('block', 'block_view', '14');
                                                  print render($block['content']);
                                                 ?>
						</p>
					</div>
					</div><!--end of sidebar-->
				</div>
