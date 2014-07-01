<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<div class="main-login-form">
			<?php
			echo '<div class="form-group">';
				print drupal_render($form['name']);
			echo '</div>';
			echo '<div class="form-group">';
				print drupal_render($form['pass']);
			echo '</div>';	
			echo '<div class="form-group">';
				print drupal_render($form['form_build_id']);
			echo '</div>';	
			echo '<div class="form-group">';
				print drupal_render($form['form_id']);
			echo '</div>';	
			echo '<div class="form-group">';
				print drupal_render($form['actions']);
			echo '</div>';	
			echo '<div class="form-group">';
				print drupal_render($form['socialloginandsocialshare_links']);
			echo '</div>';
			?>
		</div>	
	</div>
</div>
