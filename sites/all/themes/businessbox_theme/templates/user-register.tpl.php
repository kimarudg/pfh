<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-xs-12">
			<div class="main-reg-form main-bb-form">
			<?php
				//username field
				echo '<div class="form-group">';
									  //drupal_get_form('user_register_form'); 
									  //print(drupal_render(drupal_get_form('user_register_form')));
						print render($form['account']['name']);
						print render($form['account']['mail']);
									
						print render($form['profile_businessbox_register']['field_first_name']);
						print render($form['profile_businessbox_register']['field_last_name']);
						print render($form['profile_businessbox_register']['field_gender']);
						print render($form['profile_businessbox_register']['field_date_of_birth']);
						print render($form['profile_businessbox_register']['field_phone_number']);
								   
				echo '</div>';  

				echo '<div class="form-group">';
					print drupal_render($form['actions']);
					print drupal_render_children($form);
				echo '</div>';
							
			?>
			</div>	
		</div>
	</div>
</div>